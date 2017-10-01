<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'order_schedules_id', 'bank_number', 'bank_name', 'phone', 'total_fee', 'status',
    ];

    protected $guarded = [
        'id'
    ];

    public function orderSchedules(){
        return $this->hasOne('App\Models\OrderSchedules', 'order_schedules_id');
    }
}
