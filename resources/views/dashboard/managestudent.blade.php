@extends('layouts.dash')

@section('content')
<table id="example" class="table" width="100%">
<thead class="thead-default">
<tr>
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

@forelse ($res as $student)
    <tr>
	<td>{{ $student['user']['name'] }}</td>
	<td>{{ $student['rollno'] }}</td>
	<td>{{ $student['dob'] }}</td>
	<td>{{ $student['address'] }}</td>
	<td>{{ $student['parent1_contact'] }}</td>
	<td>{{ $student['parent2_contact'] }}</td>
	<td>{{ $student['home_contact'] }}</td>
	<td>{{ $student['bloodgroup'] }}</td>
	<td>{{ $student['user']['email'] }}</td>
	</tr>
@empty
    <p>No users</p>
@endforelse
</table>


@endsection
