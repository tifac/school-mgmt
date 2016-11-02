@extends('layouts.dash')

@section('content')
<table id="example" class="table" width="100%">
<thead>
<tr>
<th>First name</th>
<th>Date of Joining</th>
<th>Qualification</th>
<th>Address</th>
<th>Contact</th>
<th>Email id</th>
</tr>
</thead>

@forelse ($res as $staff)
    <tr>
	<td>{{ $staff['user']['name'] }}</td>
	<td>{{ $staff['joining_date'] }}</td>
	<td>{{ $staff['qualification'] }}</td>
	<td>{{ $staff['address'] }}</td>
	<td>{{ $staff['contact'] }}</td>
	<td>{{ $staff['user']['email'] }}</td>
	</tr>
@empty
    <p>No users</p>
@endforelse

</table>
@endsection
