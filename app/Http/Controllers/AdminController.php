<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Models\Register;

class AdminController extends Controller
{
    public function Register(AdminRequest $request)
    {


        $notification=array(
            'message' => 'شما با موفقیت ثبت نام شدید . لطفا وارد شوید',
            'alert-type' => 'success'
         );

        $password=bcrypt($request->password);
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>$password,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->route('admin.login')->with($notification);

    }
    public function Login(LoginRequest $request){
        $credentials=['email' => $request->email, 'password' => $request->password];
        if(Auth::guard('admin')->attempt($credentials)){

            $users=User::latest()->paginate(3);

            return view('admin.index' , compact('users'));


            }
            $notification=array(
                'message' => 'نام کاربری یا رمز اشتباه است',
                'alert-type' => 'error',
            );
             return redirect()->back()->with($notification);

    }
    public function logout(Request $request)
    {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            return redirect()
                ->route('admin.login')
                ->with('success','شما از پنل کاربری خود خارج شدید');
    }
    public function LoginPanel(){

        $users=User::latest()->paginate(3);

        return view('admin.index' , compact('users'));
    }
}
