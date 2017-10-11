<?php

namespace App\Http\Controllers;
use DB;
use Toastr;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use File;

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
        Toastr::success('Sueccess!! Coaching status is Done.', 'Success');
        return back();
    }
    public function upload(Request $request){
        $check = Checkout::where('invoice',$request->id)->first();
        $this->validate($request,[
            // 'phonee'=> 'required|numeric|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:7168|dimensions:max_height=1300',
        ]);    
        $upload = Storage::disk('local')->putFile('public/photo-profil', $request->file('image'));
        $check->receipt = 'storage'.substr($upload, 6);
        // return $request->all();
        Toastr::success('Sueccess Upload Receipt', 'Success');
        $check->save();
        return back();
    }
}
