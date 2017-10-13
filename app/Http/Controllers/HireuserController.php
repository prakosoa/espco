<?php

namespace App\Http\Controllers;
use DB;
use Toastr;
use App\Models\Checkout;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use File;
use App\User;

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

    public function feedback(Request $request){
        // return $request-> all();
        $check = Checkout::where('invoice',$request->id)->first();
        $check->comment = $request->comment; 
        $check->rating = $request->rating; 
        $check->save();


        $coach = User::where('level',2)->where('email',$request->email)->first();
        

        $schid =  Schedule::select('order_schedules_id')->where('coach_id',$coach->id)->get();
        $order = Checkout::select('checkouts.rating')->join('order_schedules', 'order_schedules.id','order_schedules_id')
            ->join('users','users.id','users_id')
            ->whereIn('order_schedules_id',$schid)->where('status',4)
            ->get();

        $hitung_order = Checkout::select('checkouts.rating')->join('order_schedules', 'order_schedules.id','order_schedules_id')
            ->join('users','users.id','users_id')
            ->whereIn('order_schedules_id',$schid)->where('status',4)
            ->count();

        // return $order = DB::table('checkouts')->join('order_schedules','order_schedules.id','checkouts.order_schedules_id')
        // ->join('schedules','order_schedules.id','schedules.order_schedules_id')
        // ->where('schedules.coach_id',$coach->id)
        // ->where('checkouts.status',4)
        // ->get();

        // $hitung_order = Order::where('id_desainer',$coach->id)
        //     ->where('status_order',16)
        //     ->count();

        // $rat = Order::where('id_desainer',$coach->id)
        //     ->where('status_order',16)
        //     ->get();

        $sum = 0;
        foreach ( $order as $hitung) {
            $sum += $hitung->rating;
        }
        // return $sum;
        $hasil_rating = $sum/$hitung_order;
        
        $coach->rating = $hasil_rating;
        $coach->save();

        Toastr::success('Feedback sent.', 'Success!!');
        return back();
    }
}
