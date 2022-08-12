<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmInfoRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\Confirm;
use App\Models\Document;
use Exception;
use Throwable;
use Illuminate\Support\Carbon;
use PhpParser\Comment\Doc;
use App\Models\Tour;

class UserRequestController extends Controller
{

    public function ShowRequest(){
        $users=User::all();
        // dd($users);
        $registers=Register::with('state')->get();
        //  dd($registers->state->name);
        // return $registers;

        $allarray=json_decode($registers);
        // return $allarray['state']['name'];
        if ($allarray) {
            $prices = [];
            $periods= [];
            $teammates= [];
            foreach($allarray as $data)
            {
                array_push($prices, $data->priceplane);
                array_push($periods, $data->periodplane);
                array_push($teammates, $data->teammate);
            }
        }

        // return json_encode($array);

        // print_r($prices);
        // $prices=json_decode($registers->priceplane);

        // $periods=json_decode($registers->periodplane);
        // $teammates=$registers->teammate;
        // dd($teammates);
        // $state = $registers->state->name;
        return view('admin.userrequest.index' , compact('users' , 'registers','prices','periods','teammates'));

    }

    public function ShowInfo($id){
        // dd($id);
        $user=User::where('id',$id)->first();
        // dd($user);
        $registers=Register::where('user_id' , $id)->with('state')->first();
        $tour=Tour::where('id' , $registers->tour_id)->first();
        $confirms=Confirm::where('register_id' , $registers->id)->first();
        $confirm=($confirms)?($confirms->confirm):0;
        $allarray=json_decode($registers);
        // $prices=json_decode($allarray->priceplane);
        // $periods=json_decode($allarray->periodplane);
        $teammates=json_decode($allarray->teammate);
        $price=number_format($tour->price);
        // $state=$registers->state->name;
        return view('admin.userrequest.showinfo' , compact('user','id','registers','teammates','tour','confirm','confirms','price'));
    }

    public function ConfirmInfo($id){
        $user=User::where('id',$id)->first();
        $phone=$user->phone;
        return view('admin.userrequest.confirminfo' , compact('id','phone'));
    }

    public function FinalConfirm(ConfirmInfoRequest $request){
        $register=Register::where('user_id' , $request->id)->first();
        // ($request->id);
        // try{
        Confirm::Create([
            'register_id' => $register->id ,
            'phone_number' => $request->phone ,
            'confirm' => 1,
            'price' => $request->price,
            'created_at' => Carbon::now(),
        ]);
        $sendsms=new SmsController;
        $pid='a793vn3mai';
        $sendsms->SendOkSms( $request->phone,$request->id,$pid);
        $notification=[
            'message' => 'اطلاعات کاربر تایید شد',
            'alert-type' => 'success'
        ];
        return Redirect()->route('userrequest')->with($notification);

    // }catch(Throwable $e){
            // return back()->withErrors($e->getMessage());
    //   }

    }

    public function ListDocs(){
        $docs=Document::latest()->paginate('10');
        $melli_code=User::all();
        return view('admin.userrequest.listdoc' , compact('docs' , 'melli_code'));
    }

    public function DeleteRequest($id)
    {
        $notification=array(
            'message' => 'حذف با موفقیت انجام شد.',
            'alert-type' => 'error'
         );

        $plane=User::find($id)->Delete();
        return Redirect()->back()->with($notification);
    }
}
