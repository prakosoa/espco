<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CoachtableController extends Controller
{
    public function index(){
        $coach = User::where('level',2)->get();
//        return $coach = User::where('id',1)->first();
        return view('admin.coachtable')
            ->with('coach',$coach);

    }
//    public function getData(){
//        $data['data']= DB::table('users')->get();
//        if(count($data[0])>0){
//            return view('admin.adduser');
//        }else{
//            return view('adduser');
//        }
//    }



}
