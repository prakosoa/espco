<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HireadminController extends Controller
{
    public function index(){
//        $order = HireadminModel::find()->get;
        $order = DB::table('checkouts')->get();
        return view('admin.hireadmin')->with('order',$order);


        }
 }

