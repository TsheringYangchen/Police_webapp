<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    protected $table = 'issuers';
    protected $fillable = ['Issuername','cid','designation','email','password','confirm_password'];
}
