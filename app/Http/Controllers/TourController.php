<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TourController extends Controller
{

    public function index(){

        $key1='هوایی';
        $aerials=Tour::select('id','start_day','num_days','price','checkout_type','photo')
        ->where('transportaion' ,'like', "%{$key1}%")
        ->orderByDesc('id')->get();

        $key2='زمینی';
        $earthlys=Tour::select('start_day','num_days','price','checkout_type','photo')
        ->where('transportaion' ,'like', "%{$key2}%")
        ->orderByDesc('id')->get();

        $key3='ترکیبی';
        $combinatorys=Tour::select('start_day','num_days','price','checkout_type','photo')
        ->where('transportaion' ,'like', "%{$key3}%")
        ->orderByDesc('id')->get();

        return view('index' , compact('aerials','earthlys','combinatorys'));
    }

    public function InfoUser(InfoRequest $request){
        $name=$request->name;
        $mobile=$request->mobile;
        $adult=$request->adult;
        $child=$request->child;
        $tour_id=$request->tour_id;
        return view('reserve' ,compact('name','mobile','adult','child','tour_id'));
    }

    public function ListTour(){
        $tours=Tour::all();
        return view('tour' , compact('tours'));
    }
    public function ViewTours(){
        if(!isset($_GET['accept-rules'])){
            return Redirect()->back()->with('error','لطفا شرایط و قوانین را مطالعه نموده و تایید نمایید.');
            }else{

        $tours=Tour::all();
        return view('tour' , compact('tours'));
            }
    }

    public function ViewDetails($id){
        $tour=Tour::where('id' , $id)->first();
        $trasportation=$tour->transportaion;
        if($trasportation=='هوایی'){
            $img='airplane.png';
        }elseif($trasportation=='زمینی'){
            $img='bus.png';
        }elseif($trasportation=='ترکیبی'){
            $img='tarkibi.png';
        }

        $date=str_replace('-','/',$tour->start_day);
        return view('detailtour' , compact('tour','date','img'));
    }

    public function NearestTime(){
        $listtours=Tour::orderBy('start_day')->get();
        $sortby='نزدیکترین تورها';
        return view('sorttour' , compact('listtours','sortby'));
    }

    public function CheapestTour(){
        $listtours=Tour::orderBy('price')->get();
        $sortby='مناسبترین قیمت ها';
        return view('sorttour' , compact('listtours','sortby'));
    }
    //Tour Admin

    public function AddTour(){
        return view('admin.tour.index');
    }
    public function AddDay(){
        return view('admin.tour.days');
    }
    public function StoreTour(TourRequest $request){

        $photo_tour=$request->photo;
        $photo_gen=hexdec(uniqid()).'.'.$photo_tour->getClientOriginalExtension();
        Image::make($photo_tour)->save('images/tours/'.$photo_gen);
        $photo='images/tours/'.$photo_gen;

         $tour_name='atabat';
        $addtour=Tour::create([
            'tour_name'=>$tour_name,
            'name_start_day' => $request->name_start_day,
            'start_day' => $request->start_day,
            'depature_time'=>$request->depature_time,
            'photo' => $photo,
            'transportaion' => $request->transportaion,
            'checkout_type' => $request->checkout_type,
            'type_going' => $request->type_going,
            'type_return' => $request->type_return,
            'type_plan' => $request->type_plan,
            'type_code' => $request->type_code,
            'price' => $request->price,
            'state' => $request->state,
            'city' => $request->city,
            'kargozar' => $request->kargozar,
            'group' => $request->group,
            'execute_code' => $request->execute_code,
            'execute_name' => $request->execute_name,
            'hotel_najaf' => $request->hotel_najaf,
            'hotel_karbala' => $request->hotel_karbala,
            'hotel_kazemain' => $request->hotel_kazemain,
            'address' => $request->address,
            'num_days' => $request->num_days,
            'modir_karvan_name' => $request->modir_karvan_name,
            'modir_karvan_phone_number' => $request->modir_karvan_phone_number,
            'rohani_karvan_name' => $request->rohani_karvan_name,
            'rohani_karvan_phone_number' => $request->rohani_karvan_phone_number,
        ]);


        if($addtour){
            $notification=[
                'message' => 'مشخصات تور جدید ثبت شد',
                'alert-type' => 'success'
            ];
            return Redirect()->back()->with($notification);
        }
    }

    public function ShowTours(){
        $tours=Tour::all();
        return view('admin.tour.list' , compact('tours'));
    }

    public function DeleteTour($id){
        $notification=[
            'message' => ' تور با موفقیت حذف شد',
            'alert-type' => 'error'
        ];
        Tour::find($id)->delete();
        return Redirect()->back()->with($notification);
    }
}
