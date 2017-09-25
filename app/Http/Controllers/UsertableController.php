<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsertableController extends Controller
{
    public function index(){
        $user = User::where('level',3)->get();
//        return $coach = User::where('id',1)->first();
        return view('admin.usertable')
            ->with('user',$user);

    }
}
