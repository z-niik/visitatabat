<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoinRequest;
use Illuminate\Http\Request;
use App\Models\Loin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use App\Models\Day;

class LoinController extends Controller
{
    public function SubmitLoin(LoinRequest $request){

        $status=0;
        $name=$request->name;
        $phone=$request->phone;
        $days=Day::all();
        $submit=Loin::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'status' => $status,
            'created_at' => Carbon::now(),
        ]);

        $notification=([
            'message' => 'اطلاعات شما ثبت شما.منتظر تماس همکاران ما باشید .',
            'alert-type' => 'success',
        ]);

        if($submit){
            Return view('success' ,compact('name','phone','days'));
        }else{
            $notification=([
                'message' => 'ارسال اطلاعات با خطا مواجه شد.لطفا دوباره اطلاعات را ارسال کنید.',
                'alert-type' => 'error',
            ]);
            Return Redirect()->back()->with($notification);
        }
    }

    public function UpdateLoan(Request $request){

        $upday=Loin::where('phone' , $request->phone)->update(['day' => $request->selectday]);
        $notification=array(
            'message' => 'انتخاب شما با موفقیت ثبت شد.لطفا منتظر تماس همکاران ما باشید.',
            'alert-type' => 'success'
         );

        return Redirect()->route('loan.registration')->with($notification);
    }

    public function ListRequest(){
        $loan_request=Loin::whereNull('day')->latest()->paginate(10);
        return view('admin.loan.index' , compact('loan_request'));
    }
    public function ListRequestDate(){
        $loan_request=Loin::whereNotNull('day')->latest()->paginate(10);
        return view('admin.loan.listdate' , compact('loan_request'));
    }

    public function DeleteLoin($id){
        $notification=array(
            'message' => '    حذف  انجام شد.',
            'alert-type' => 'error'
         );

        $loan=Loin::find($id)->Delete();
        return Redirect()->back()->with($notification);
    }


}
