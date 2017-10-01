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

}
