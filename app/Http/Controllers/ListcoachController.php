<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListcoachController extends Controller
{
    public function index()
    {
        return view('guess.listcoach');
    }
}
