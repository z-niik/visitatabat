<?php

namespace App\Http\Controllers;

use App\Http\Requests\DayRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Day;
use App\Models\Loin;

class DayController extends Controller
{
    public function StoreDays(DayRequest $request){
        $addday=Day::create([
            'sun1' => $request->sun1,
            'sun2' => $request->sun2,
            'sun3' => $request->sun3,
            'sun4' => $request->sun4,
            'wed1' => $request->wed1,
            'wed2' => $request->wed2,
            'wed3' => $request->wed3,
            'wed4' => $request->wed4,
            'fri1' => $request->fri1,
            'fri2' => $request->fri2,
            'fri3' => $request->fri3,
            'fri4' => $request->fri4,
            'created_at' => Carbon::now()
        ]);
        if($addday){
            $notification=[
                'message' => 'تاریخ  روزها ثبت شد',
                'alert-type' => 'success'
            ];
            return Redirect()->back()->with($notification);
        }
    }



    }

