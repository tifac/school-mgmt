<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profilePic()
    {
    	return view("profile.profilepic");
    }
}
