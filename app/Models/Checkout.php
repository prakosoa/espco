<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    // public $timestamps = true;
    protected $fillable = [
        'order_schedules_id', 'bank_number', 'bank_name', 'phone', 'total_fee', 'status', 'invoice',
    ];

    protected $guarded = [
        'id'
    ];

    public static function orderSchedules(){
        return $this->hasOne('App\Models\OrderSchedules', 'order_schedules_id');
    }
}
