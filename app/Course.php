<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function instructors() 
    {
    	return $this->belongsToMany('App\Instructor')->withTimestamps();
    }

    public function user() 
    {
    	return $this->hasOne('App\User', 'id', 'uid');
    }
}
