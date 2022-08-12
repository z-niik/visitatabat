<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Models\Register;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Tour;

class UserController extends Controller
{
    public function ShowInfo(){
        $user=Auth::user();
        $register=Register::where('user_id',$user->id)->with('state')->first();
        $tour=Tour::where('id' , $register->tour_id)->first();
        $price=number_format($tour->price);
        $allarray=json_decode($register);
        // $prices=json_decode($allarray->priceplane);
        // $periods=json_decode($allarray->periodplane);
        $teammates=json_decode($allarray->teammate);
        // $state=$register->state->name;

        return view('user.myinfo' , compact('user','register','price','teammates','tour'));
    }
    public function UploadDoc(){
        $id=Auth::user()->id;
        $doc=Document::where('user_id' , $id)->first();
        return view('user.upload', compact('doc'));
}
    public function StoreDoc(DocumentRequest $request){

        $id=Auth::user()->id;
        $doc=Document::where('user_id' , $id)->first();
        // dd($doc);
        $melli_image=$request->file('melli');
        $fish_image=$request->file('fish');
        $gozarname1=$request->file('gozarname1');
        $gozarname2=$request->file('gozarname2');
       /*
          کارت ملی
        */

        $melli_gen=hexdec(uniqid()).'.'.$melli_image->getClientOriginalExtension();
        Image::make($melli_image)->resize(300,200)->save('images/docs/'.$melli_gen);
        $melli_img='images/docs/'.$melli_gen;
/*
        فیش واریزی
        */
        $fish_gen=hexdec(uniqid()).'.'.$fish_image->getClientOriginalExtension();
        Image::make($fish_image)->resize(300,200)->save('images/docs/'.$fish_gen);
        $fish_img='images/docs/'.$fish_gen;
        /*
         صفحه ی اول گذرنامه
        */
        $gozarname1_gen=hexdec(uniqid()).'.'.$gozarname1->getClientOriginalExtension();
        Image::make($gozarname1)->resize(300,200)->save('images/docs/'.$gozarname1_gen);
        $gozarname1_img='images/docs/'.$gozarname1_gen;
        // dd($gozarname1_img);
          /*
         صفحه ی دوم گذرنامه
        */
        $gozarname2_gen=hexdec(uniqid()).'.'.$gozarname2->getClientOriginalExtension();
        Image::make($gozarname2)->resize(300,200)->save('images/docs/'.$gozarname2_gen);
        $gozarname2_img='images/docs/'.$gozarname2_gen;


        if($doc)
        {
            $old_melli=$doc->melli_image;
            $old_fish=$doc->fish_image;
            $old_gozarname1=$doc->$gozarname1;
            $old_gozarname2=$doc->$gozarname2;
            unlink($old_melli);
            unlink($old_fish);
            unlink($old_gozarname1);
            unlink($old_gozarname2);
            Document::where('user_id',$doc->id)->update([
                'melli_image' => $melli_img,
                'fish_image' => $fish_img,
                'gozarname1' => $gozarname1_img,
                'gozarname2' => $gozarname2_img,
            ]);
        }else{
            // dd('sssss');
        Document::create([
            'user_id' => Auth::user()->id,
            'melli_image' => $melli_img,
            'fish_image' => $fish_img,
            'gozarname1' => $gozarname1_img,
            'gozarname2' => $gozarname2_img,
            'created_at' => Carbon::now(),
        ]);
    }
        $notification=array(
            'message' => 'مدارک با موفقیت بارگزاری شد',
            'alert_type' => 'success'
         );

        return Redirect()->back()->with($notification);
    }
}
