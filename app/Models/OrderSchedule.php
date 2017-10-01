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
        $this->hasMany('App\Models\Schedule');
    }
}
