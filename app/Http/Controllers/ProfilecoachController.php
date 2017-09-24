<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilecoachController extends Controller
{
    public function index()
    {
        return view('guess.profilecoach');
    }
}
