<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function manageStudent() {
        return view('dashboard.managestudent');
    }

    public function manageStaff() {
        return view('dashboard.managestaff');
    }

    public function viewAddStaff() {
        return view('dashboard.editstaff');
    }

    public function viewAddStudent() {
        return view('dashboard.editstudent');
    }

    public function addStudent(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'rollno' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
            'parent1_contact' => 'required|digits:10',
            'parent2_contact' => 'required|digits:10',
            'home_contact' => 'required|digits',
            'bloodgroup' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    }

    public function addStaff(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'joining_date' => 'required|date',
            'qualification' => 'required',
            'address' => 'required',
            'contact' => 'required|digits:10',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    }
}
