@extends('layouts.dash')

@section('content')
<table id="example" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th>Sid</th>
<th>First Name</th>
<th>Roll No</th>
<th>Date of Birth</th>
<th>Address</th>
<th>Parent contact Number</th>
<th>Guardian contact Number</th>
<th>Home contact Number</th>
<th>Blood Group</th>
<th>Email id</th>
</tr>
</thead>
</table>

<div id="browse_app">
  <a class="btn btn-large btn-info" href="{{ url('/dashboard/student/new') }}">Create New</a>
</div>

@endsection
