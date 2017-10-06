<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Auth;

class HireuserController extends Controller
{
    public function index()
    {
        $order = DB::table('checkouts')->join('order_schedules','order_schedules.id','checkouts.order_schedules_id')->where('order_schedules.users_id',Auth::user()->id)->get();
        return view('user.hireuser')->with('order',$order);
    }
    public function done(Request $request){
        // return $request-> all();
        $check = Checkout::where('invoice',$request->id)->first();
        $check->status = 4;
        $check->save();
        return back();
    }
}
