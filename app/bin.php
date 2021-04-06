<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bin extends Model
{
    protected $table='bins';
    protected $fillable=['lno', 'lda', 'lna', 'cno', 'ena', 'lp','image'];
    
}
