<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HireModel extends Model
{
    protected $table="checkout";
    protected $primaryKey="id";
    protected $fillable=['id','umur','alamat','no_hp','bank_number','bank_name','phone','total_fee'];

}
