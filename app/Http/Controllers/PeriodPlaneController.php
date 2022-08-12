<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PeriodPlane;

class PeriodPlaneController extends Controller
{
    public function showPeriod()
    {
        $planes=PeriodPlane::latest()->paginate(7);
        return view('admin.periodplan.index' , compact('planes'));
    }
    public function AddPeriodPlane(Request $request)
    {
        $notification=array(
            'message' => 'دوره ی اعزامی مورد نظر شما ذخیره شد.',
            'alert-type' => 'success'
         );
         PeriodPlane::insert([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
     Return Redirect()->back()->with($notification);
    }

    public function DeletePeriodPlan($id)
    {
        $notification=array(
            'message' => 'طرح مورد نظر شما حذف شد.',
            'alert-type' => 'error'
         );

        $plane=PeriodPlane::find($id)->Delete();
        return Redirect()->back()->with($notification);
    }

    public function EditPeriodPlane($id)
    {
        $plane=PeriodPlane::find($id);
        return view('admin.periodplan.Edit' , compact('plane'));
    }

    public function Edit(Request $request , $id)
    {
        $notification=array(
            'message' => 'طرح مورد نظر شما ویرایش شد.',
            'alert-type' => 'success'
         );

        PeriodPlane::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return Redirect()->route('period.panel')->with($notification);
    }
}
