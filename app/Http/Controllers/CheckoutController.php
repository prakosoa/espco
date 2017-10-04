<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use App\Models\OrderSchedule;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show($id)
    {
        $order = OrderSchedule::findorFail($id);
        return view('user.checkout', [
            'order' => $order
        ]);
        
    }

    public function create(Request $request) {
        $this->validate($request, [
            'phone_number' => 'required',
            'bankname' => 'required',
            'accountnumber' => 'required',
            'total_fee' => 'required',
            'order_schedule_id' =>'required',
            
        ]);


        Checkout::create([
            'order_schedules_id' => $request->order_schedule_id,
            // 'invoice'=> $request->invoice=str_random(10),
            'bank_number' => $request->accountnumber,
            'bank_name' => $request->bankname,
            'phone' => $request->phone_number,
            'total_fee' => $request->total_fee,
            'status' => 1,
        ]);
        return redirect()->route('user.hiredcoach');
    }
}
