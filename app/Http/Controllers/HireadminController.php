<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Checkout;
use Illuminate\Http\Request;

class HireadminController extends Controller
{
    public function index(){
//        $order = HireadminModel::all();
        $order = DB::table('checkouts')->get();
        //$order=Checkout::join('order_schedules as os','order_schedules_id','os.id')->join('users','users_id','users.id')->join('schedules','os.id','order_schedules_id')->get();
        return view('admin.hireadmin')->with('order',$order);


        }
 }

