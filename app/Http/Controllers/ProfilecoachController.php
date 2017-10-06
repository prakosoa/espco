<?php

namespace App\Http\Controllers;

use App\Models\OrderSchedule;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class ProfilecoachController extends Controller
{
    public function index($id)
    {   $coach=User::find($id);
        // $schedules = Schedule::join('order_schedules', 'order_schedules.id', '=', 'schedules.order_schedules_id', 'left')
        //     ->join('checkouts', 'order_schedules.id', '=', 'checkouts.order_schedules_id', 'left')
        //     ->where('checkouts.status', '=', 1)
        //     ->where('schedules.coach_id','=',$id)
        //     ->where('schedules.status','=', 0);
        $schedules = Schedule::where('schedules.status','=', 2)
        ->where('schedules.coach_id','=',$id);
        return view('guess.profilecoach')->with('coach',$coach)
            ->with('schedules', $schedules->get())
            ;
    }

    public function hireCoach(Request $request) {
        $this->validate($request, [
            'ordered_schedule' => 'required'
        ]);
        $ordered_schedule = explode(',', $request->ordered_schedule);
        $order = OrderSchedule::create([
            'users_id' => Auth::user()->id,
        ]);
//        dd($order->id);
        foreach($ordered_schedule as $s) {
            Schedule::create([
                'datetime' => Carbon::parse($s),
                'status' => true,
                'coach_id' => $request->coach_id,
                'order_schedules_id' => $order->id,
            ]);
        }
        return redirect()->route('user.checkout', $order->id);

    }

}
