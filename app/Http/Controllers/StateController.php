<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use Illuminate\Support\Carbon;

class StateController extends Controller
{

    public function ViewState()
    {
        $states=State::latest()->paginate(2);
        return view('admin.state.index' , compact('states'));
    }

    public function AddState(Request $request)
    {
        $notification=array(
            'message' => 'استان مورد نظر ثبت شد.',
            'alert-type' => 'success'
        );
        State::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with($notification);
    }

    public function Edit($id)
    {
        $state=State::find($id);
        return view('admin.state.edit' , compact('state'));
    }

    public function EditState(Request $request , $id)
    {
        $notification=array(
            'message' => 'ویرایش با موفقیت انجام شد',
            'alert-type' => 'success'
        );
        State::find($id)->update([
            'name'=>$request->name,
        ]);
        return Redirect()->route('state.list')->with($notification);
    }
    public function DeleteState($id)
    {
       $state= State::find($id);
       $state->Delete();
        $notification=array(
            'message'=>' استان '.$state->name . '  حذف شد  ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);


    }
}
