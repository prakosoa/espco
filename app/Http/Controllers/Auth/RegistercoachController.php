<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterCoachController extends Controller
{
    //
    public function index() {
        return view('auth.registercoach');
    }
}