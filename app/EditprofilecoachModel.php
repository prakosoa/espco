<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditprofilecoachModel extends Model
{
    public function index(){
        return view('coach.editprofilecoach');
    }
}
