<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\OrderSchedule;

class InvoiceController extends Controller
{
    public function index($inv){

        $check = Checkout::where('invoice',$inv)->first();
        $order = OrderSchedule::findorFail($check->order_schedules_id);

       
        // return $check->phone;

        return view('guess.invoice', [
            'order' => $order
        ])->with('check',$check);
    }
}
