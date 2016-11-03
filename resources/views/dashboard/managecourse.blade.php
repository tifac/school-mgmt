@extends('layouts.dash')

@section('content')
<table id="example" class="table" width="100%">
<thead>
<tr>
<th>Course Name</th>
<th>Course Code</th>
<th>Credits</th>

</tr>
</thead>
@forelse ($res as $course)
    <tr>
	<td>{{ $course['course_name'] }}</td>
	<td>{{ $course['course_code'] }}</td>
	<td>{{ $course['credits'] }}</td>
	</tr>
@empty
    <p>No users</p>
@endforelse

</table>
<div id="browse_app">
  <a class="btn btn-large btn-info" href="{{ url('/dashboard/course/new') }}">Create New</a>
</div>
@endsection