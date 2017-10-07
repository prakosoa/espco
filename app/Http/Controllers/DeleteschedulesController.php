<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Toastr;

class DeleteschedulesController extends Controller
{
    public function show(){
        $schedules = Schedule::where('coach_id', '=', Auth::user()->id)->where('order_schedules_id',"=",null)->get();
        return view('coach.deleteschedules')->with('schedules',$schedules)
        ;
    }

    public function destroy(Request $request){
        
                $schedules = Schedule::find($request->id);
                Toastr::success('Sueccess Delete Schedule', 'Success!!');
                $schedules->delete();
        
                return back();
            }
}
