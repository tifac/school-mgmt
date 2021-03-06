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
        $res = \App\Student::with('user')->get();
        return view('dashboard.managestudent')->with('res', $res);
    }

    public function manageStaff() {
        $res = \App\Instructor::with('user')->get();
        return view('dashboard.managestaff')->with('res', $res);
    }

    public function manageCourse() {
        $res = \App\Course::all();
        return view('dashboard.managecourse')->with('res', $res);
    }

    public function viewAddCourse() {
        $res = \App\Course::all();
        return view('dashboard.addcourse')->with('res', $res);
    }
    public function viewAddStaff() {
        return view('dashboard.editstaff');
    }

    public function viewAddStudent() {
        return view('dashboard.editstudent');
    }
    
    public function viewAssignInstructor() {

        $instructors_names = \App\Instructor::with('user')->get();
        $course_names = \App\Course::with('user')->get();

        return view('dashboard.assigninstructor');
    }

    public function viewCourseRegistration() {
        return view('dashboard.courseregistration');
    }

    public function addStudent(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'rollno' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
            'parent1_contact' => 'required|digits:10',
            'parent2_contact' => 'required|digits:10',
            'home_contact' => 'required|digits:11',
            'bloodgroup' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = \App\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'profilepic' => '/dummy.png',
            'role_id' => 2,
        ]);

        $student = new \App\Student();
        $student->rollno = $request->rollno;
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->parent1_contact = $request->parent1_contact;
        $student->parent2_contact = $request->parent2_contact;
        $student->home_contact = $request->home_contact;
        $student->bloodgroup = $request->bloodgroup;
        $student->uid = $user->id;

        $student->save();

        return view('dashboard.editstudent')->with('status', 'succcess');
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

        $user = new \App\User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profilepic = "placeholder.png";
        $user->role_id = 2;
        $user->save();

        $instructor = new \App\Instructor();
        $instructor->joining_date = $request->joining_date;
        $instructor->qualification = $request->qualification;
        $instructor->address = $request->address;
        $instructor->contact = $request->contact;
        $instructor->uid = $user->id;
        $instructor->save();

        return view('dashboard.editstaff')->with('status', 'succcess');
    }

    public function addCourse(Request $request) {
        $this->validate($request, [
            'course_name' => 'required|max:255',
            'course_code' => 'required|alpha_num|unique:courses',
            'credits' => 'required|numeric|min:0|max:20',
            
        ]);

        $course = new \App\Course();
        $course->course_name = $request->course_name;
        $course->course_code = strtoupper($request->course_code);
        $course->credits = $request->credits;
        $course->save();

        return view('dashboard.addcourse')->with('status', 'succcess');   
    }
    public function assignInstructor(Request $request) {
        $this->validate($request, [
            'course_name' => 'required|max:255',
            'instructors_name' => 'required|max:255',
        ]);

        $courseregistration = new \App\Course();
        $courseregistration->course_name = $request->course_name;
        $user->save();

        $instructor = new \App\Instructor();
        $instructor->instructors_name = $request->instructors_name;
        $instructor->save();

        return view('dashboard.courseregistration')->with('status', 'succcess');
    }
}
