<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSchedule extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'users_id'
    ];

    protected $guarded = [
        'id'
    ];

    public function schedules(){
        return $this->hasMany('App\Models\Schedule', 'order_schedules_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }
}
