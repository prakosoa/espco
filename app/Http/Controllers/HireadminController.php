<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\User;
use Toastr;

class HireadminController extends Controller
{
    public function index(){
        $order = Checkout::get();
       
        return view('admin.hireadmin')->with('order',$order);
        }

    public function confirm(Request $request){
        $check = Checkout::find($request->id);
        $check->status = 2;
        Toastr::success('Sueccess Confirm Payment', 'Success!!');
        $check->save();
        return back();
    }
    public function refund(Request $request){
        $check = Checkout::find($request->id);
        $check->status = 5;
        Toastr::success('Sueccess Refund', 'Success!!');
        $check->save();
        return back();
    }
    public function cancel(Request $request){
        $check = Checkout::find($request->id);
        $check->status = 6;
        Toastr::success('Sueccess Cancel', 'Success!');
        $check->save();
        return back();
    }

 }

