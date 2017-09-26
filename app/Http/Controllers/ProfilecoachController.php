<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilecoachController extends Controller
{
    public function index($id)
    {   $coach=User::find($id);
        return view('guess.profilecoach')->with('coach',$coach);
    }

}
