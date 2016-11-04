@extends('layouts.app')

@section('sidebar')
 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/staff') }}"><i class="fa fa-fw fa-bar-chart-o"></i>Manage Staff</a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/student') }}"><i class="fa fa-fw fa-bar-chart-o"></i>Manage Student</a>
                    </li>
					<li>
                        <a href="{{ url('/dashboard/course') }}"><i class="fa fa-fw fa-bar-chart-o"></i>Manage Course</a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/course') }}"><i class="fa fa-fw fa-bar-chart-o"></i>Course Registration</a>
                    </li>
                </ul>
            </div>
@endsection
