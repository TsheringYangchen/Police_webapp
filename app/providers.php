<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    protected $table='providers';
    protected $fillable=['name','cid','Designation','email','password','confirm_password'];
}



