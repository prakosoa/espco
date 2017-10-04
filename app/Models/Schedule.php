<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'datetime', 'coach_id', 'status', 'order_schedules_id'
    ];

    protected $guarded = [
        'id'
    ];

    public function coach(){
        return $this->belongsTo('App\User', 'coach_id');
    }

    public function listedEvents(){
        return $this->join('order_schedules', 'order_schedules.id', '=', 'schedules.order_schedules_id')
            ->join('checkouts', 'order_schedules.id', '=', 'checkouts.order_schedules_id');
    }

}
