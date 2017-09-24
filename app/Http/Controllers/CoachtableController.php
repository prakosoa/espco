<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachtableController extends Controller
{
    public function index(){
        return view('admin.coachtable');
    }
}
