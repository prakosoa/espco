<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HirecoachController extends Controller
{
    public function index()
    {
        $order = DB::table('checkouts')->get();
        return view('coach.hirecoach')->with('order',$order);
    }
  

}
