<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcceptRulesRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Register;
use Illuminate\Support\Carbon;
use App\Models\State;
use App\Models\PeriodPlane;
use App\Models\PricePlane;
use App\Models\User;
use App\Http\Controllers\SmsController;
use App\Http\Requests\StoreUserRequest;
use App\Models\Document;
use APP\Models\Sms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Throwable;
use App\Models\Tour;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{

    public function ArtoEnNumeric($string) {
        return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
    }

    public function RegisterFrom($id)
    {
            $tour=Tour::where('id' , $id)->first();

            return view('register' , compact('tour'));

    }

    public function RegisterUser($id)
    {
        return view('register' ,compact('id'));

    }



    public function ReCheckForm($data , $id){
        $data=json_decode(base64_decode($data));
        $tour=Tour::where('id' , $id)->first();
        return view('recheckform' , compact('data','tour'));
    }


    public function StoreUser(StoreUserRequest $requset){

        $team_num=$requset->adult_num +$requset->child_num;
        $tour_id=$requset->tour_id;
        if(isset($requset->cash)){
         $cash=$requset->cash;
        }else{
            $cash=null;
        }
        $name=$requset->name;
        $mobile=$requset->mobile;
        $mellicode=$requset->mellicode;
        $idnumber=$requset->idnumber;
dd($requset->team_gozarname);
        for($i=0 ; $i< $team_num ;$i++)
        {
            $team_name[$i]=$requset->team_name;
            $team_mobile[$i]=$requset->team_mobile;
            $team_mellicode[$i]=$requset->team_mellicode;
            $team_idnumber[$i]=$requset->team_idnumber;
            $team_age[$i]=$requset->age;

            $gozarname_t=$requset->team_gozarname;
            $gozarname_t_gen=hexdec(uniqid()).'.'.$gozarname_t->getClientOriginalExtension();
            Image::make($gozarname_t)->save('images/tours/'.$gozarname_t_gen);
            $team_gozarname[$i]='images/docs/'.$gozarname_t_gen;

            $vaksan_t=$requset->team_vaksan;
            $vaksan_t_gen=hexdec(uniqid()).'.'.$vaksan_t->getClientOriginalExtension();
            Image::make($vaksan_t)->save('images/tours/'.$vaksan_t_gen);
            $team_vaksan[$i]='images/docs/'.$vaksan_t_gen;
         }
        $gozarname_photo=$requset->gozarname_photo;
        $gozarname_gen=hexdec(uniqid()).'.'.$gozarname_photo->getClientOriginalExtension();
        Image::make($gozarname_photo)->save('images/tours/'.$gozarname_gen);
        $gozarname_photo='images/docs/'.$gozarname_gen;

        $vaksan_photo=$requset->vaksan_photo;
        $vaksan_gen=hexdec(uniqid()).'.'.$vaksan_photo->getClientOriginalExtension();
        Image::make($vaksan_photo)->save('images/tours/'.$vaksan_gen);
        $vaksan_gen='images/docs/'.$vaksan_gen;

         $user=User::create([
            'name' => $name,
            'idnumber' => $idnumber,
            'phone' => $mobile,
            'melli_code' => $mellicode,
            'password' =>bcrypt($mobile)
         ]);
         $register=Register::create([
            'user_id' => $user->id,
            'adult_num'=> $requset->adult_num,
            'child_num' => $requset->child_num,
            'tour_id' => $tour_id,
            'team_name' => json_encode($team_name),
            'team_mellicode' => json_encode($team_mellicode),
            'team_mobile' => json_encode($team_mobile),
            'team_idnumber' => json_encode($team_idnumber),
            'cash' => $cash,
            'team_age' =>json_encode($team_age)
        ]);
        $docs=Document::create([
            'user_id' => $user->id,
            'vaksan_photo' => $vaksan_photo,
            'gozarname_photo' => $gozarname_photo,
            'team_vaksan' => json_encode($vaksan_photo),
            'team_gozarname' => json_encode($vaksan_photo)
        ]);
        dd($user);
        //   return Redirect()->Route('success.reserve');
     }

     public function SuccessReserve(){
        return view('success_reserve');
     }
     public function ConfirmForm()
    {

    }

}
