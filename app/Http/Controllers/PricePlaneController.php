<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricePlane;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class PricePlaneController extends Controller
{
    public function showPrice()
    {
        $planes=PricePlane::latest()->paginate(7);
        return view('admin.priceplane.index' , compact('planes'));
    }
    public function AddPricePlane(Request $request)
    {
        $notification=array(
            'message' => 'طرح مورد نظر شما ذخیره شد.',
            'alert-type' => 'success'
         );
        PricePlane::insert([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);
     Return Redirect()->back()->with($notification);
    }

    public function DeletePricePlan($id)
    {
        $notification=array(
            'message' => 'طرح مورد نظر شما حذف شد.',
            'alert-type' => 'error'
         );

        $plane=PricePlane::find($id)->Delete();
        return Redirect()->back()->with($notification);
    }

    public function EditPricaPlane($id)
    {
        $plane=PricePlane::find($id);
        return view('admin.priceplane.Edit' , compact('plane'));
    }

    public function Edit(Request $request , $id)
    {
        $notification=array(
            'message' => 'طرح مورد نظر شما ویرایش شد.',
            'alert-type' => 'success',
         );

        PricePlane::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return Redirect()->route('price.panel')->with($notification);
    }
}

