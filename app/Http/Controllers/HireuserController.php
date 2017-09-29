<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HireuserController extends Controller
{
    public function index()
    {
        $order = DB::table('checkouts')->get();
        return view('user.hireuser')->with('order',$order);
    }
}
