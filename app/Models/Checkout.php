<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    // public $timestamps = true;
    protected $fillable = [
        'order_schedules_id', 'bank_number', 'bank_name', 'phone', 'total_fee', 'status', 'invoice','receipt',
    ];

    protected $guarded = [
        'id'
    ];

    public function orderSchedules(){
        return $this->belongsTo('App\Models\OrderSchedule', 'order_schedules_id');
    }
}
