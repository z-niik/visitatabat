<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use App\Models\Confirm;
use Illuminate\Foundation\Auth\User;

class AuthController extends Controller
{
    public function LoginUser(UserLoginRequest $request){

        $credentials=['name' => $request->name, 'password' => $request->password];
        // dd($credentials);
        if(Auth::attempt($credentials)){
            $id=auth()->user()->id;
            $register_id=User::find($id)->id;
            $confirm=Confirm::where('register_id', $register_id)->first();
            $confirm=($confirm)?($confirm->confirm):0;
            return view('user.index' , compact('confirm'));
            }
            $notification=array(
                'message' => 'نام کاربری یا رمز اشتباه است',
                'alert-type' => 'error',
            );
             return redirect()->back()->with($notification);


    }

    public function Dashboard(){
        $id=auth()->user()->id;
        $register_id=User::find($id)->id;
        $confirm=Confirm::where('register_id', $register_id)->first();
        $confirm=($confirm)?($confirm->confirm):0;
        return view('user.index' , compact('confirm'));
    }

    public function logout(Request $request)
    {
            auth()->logout();
            $request->session()->invalidate();
            return redirect()
                ->route('user.login')
                ->with('success','شما از پنل کاربری خود خارج شدید');
    }
}
