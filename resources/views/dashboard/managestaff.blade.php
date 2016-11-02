@extends('layouts.dash')

@section('content')
 
<table id="example" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th>sid</th>
<th>First name</th>
<th>Date of Joining</th>
<th>Email id</th>

</tr>
</thead>
</table>

<div id="browse_app">
  <a class="btn btn-large btn-info" href="{{ url('/dashboard/staff/new') }}">Create New</a>
</div>

                       
 
 
@endsection
