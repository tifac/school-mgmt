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

    public function courses()
    {
    	return $this->belongsToMany('App\Course')->withTimestamps();
    }
}
