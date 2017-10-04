<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
 public function index()
 {
     $schedules = Schedule::where('coach_id', '=', Auth::user()->id)->get();
     return view('coach.schedule')->with('schedules', $schedules);
 }
}
