<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ListcoachController extends Controller
{
    public function index()
    {
        $coach = User::where('level',2)->get();
//        return $coach = User::where('id',1)->first();
//        return view('admin.coachtable')
        return view('guess.listcoach')->with('coach',$coach);;
    }
}
