<?php

namespace App\Http\Controllers;

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
}
