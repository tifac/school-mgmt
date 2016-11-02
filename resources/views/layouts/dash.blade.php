@extends('layouts.app')

@section('sidebar')
 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i>Profile</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i>Manage Staff</a>
                    </li>
                    <li>
                        <a href="charts1.html"><i class="fa fa-fw fa-bar-chart-o"></i>Manage Student</a>
                    </li>
					<li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i>Students Fee</a>
                    </li>
                </ul>
            </div>
@endsection