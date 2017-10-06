<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class ScheduleController extends Controller
{
 public function index()
 {
     $schedules = Schedule::where('coach_id', '=', Auth::user()->id)->get();
     return view('coach.schedule')->with('schedules', $schedules);
 }
 public function createSchedule(Request $request){
     $this->validate($request, [
         'ordered_schedule' => 'required'
     ]);
     $ordered_schedule = explode(',', $request->ordered_schedule);
     foreach($ordered_schedule as $s) {
         Schedule::create([
             'datetime' => Carbon::parse($s),
             'status' => 2,
             'coach_id' => $request->coach_id,
             'order_schedules_id' => null,
         ]);
     }
     return back();
 }
}
