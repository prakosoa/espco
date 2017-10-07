<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Checkout;

class AdminController extends Controller
{
    public function index(){
        $count = User::where('level','=','2')->count();
        $countu = User::where('level','=','3')->count();
        $countcheck = Checkout::where('status','=','1')->count();
        return view('admin.dashboard')->with('count',$count)
        ->with('countu',$countu)
        ->with('countcheck',$countcheck)
        ;
        
    }
    public function user(){

    }
}
