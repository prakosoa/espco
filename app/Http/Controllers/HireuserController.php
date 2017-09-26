<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireuserController extends Controller
{
    public function index(){
        return view('user.hireuser');
    }
}
