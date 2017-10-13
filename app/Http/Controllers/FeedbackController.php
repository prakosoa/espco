<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Checkout;
use App\Models\Schedule;


class FeedbackController extends Controller
{
    public function index($id){
        $coach=User::find($id);
        // $check = Checkout::find('invoice');
        // $comment=Checkout::join('schedule')
        //  $comment = Schedule::join('order_schedules', 'order_schedules.id','schedules.order_schedules_id')
        //     ->leftjoin('checkouts', 'order_schedules.id','checkouts.order_schedules_id')
        //     ->leftjoin('users','users.id','schedules.coach_id' )
        //     ->where('schedules.coach_id',$id)
        //     ->where('checkouts.status',4)->get();

        $schid =  Schedule::select('order_schedules_id')->where('coach_id',$id)->get();
        $comment = Checkout::join('order_schedules', 'order_schedules.id','order_schedules_id')
                ->join('users','users.id','users_id')
                ->whereIn('order_schedules_id',$schid)->where('status',4)->get();

        return view('guess.feedback')->with('coach',$coach)->with('comment',$comment);
    }

}
