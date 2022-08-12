<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sms;
use Illuminate\Foundation\Auth\User;

class VeriedSmsController extends Controller
{
    public function Verification(Request $request){
        // dd($request->id);
        $verify=Sms::where('user_id' , $request->id)->latest()->first();
        // dd($verify->code==$request->code);
        if($verify->code==$request->code)
        {
            $id=$request->id;
            $user=User::where('id',$id)->first();
            $mellicode=$user->melli_code;
            $pid2='yn8s4spa2n';
            $sendadminsms=new SmsController;
            $sendadminsms->SendAdminSms( $mellicode, $id,$pid2);
            return Redirect()->route('success.registration')->with('success','متقاضی گرامی');
         }
        else{
            return Redirect()->back()->with('error', 'کد وارد شده صحیح نمیباشد' );
        }
    }
}
