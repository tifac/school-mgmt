<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructors';

    public function user() 
    {
    	return $this->hasOne('App\User', 'id', 'uid');
    }
}
