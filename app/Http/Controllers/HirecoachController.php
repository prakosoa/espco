<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Checkout;
use Toastr;
use Illuminate\Http\Request;

class HirecoachController extends Controller
{
    public function index()
    {
        $order = DB::table('checkouts')->where('status','>',1)->get();
        return view('coach.hirecoach')->with('order',$order);
    }
    public function approve(Request $request){
        // return $request-> all();
        $check = Checkout::where('invoice',$request->id)->first();
        $check->status = 3;
        $check->save();
        Toastr::success('Sueccess Approve', 'Success!!');
        return back();
    }

    public function refuse(Request $request){
        // return $request-> all();
        $check = Checkout::where('invoice',$request->id)->first();
        $check->status = 5;
        $check->save();
        Toastr::success('Sueccess Refuse', 'Success!!');
        return back();
    }

}
