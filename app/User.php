<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level', 'steam','nickname','games_id','phone','fee','bank','rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orderSchedules(){
        return $this->hasMany('App\Models\OrderSchedule', 'users_id');
    }

    public function coachSchedules(){
        return $this->hasMany('App\Models\Schedule', 'coach_id');
    }
}
