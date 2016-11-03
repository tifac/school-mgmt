@extends('layouts.dash')

@section('content')

<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  @if (isset($status))
    <div class="alert alert-success" role="alert">
      <a href="#" class="alert-link">Successfully updated!</a>
    </div>
  @endif
        <h3>New course details</h3>
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dashboard/course/new') }}">

          <div class="form-group">
            <label class="col-lg-3 control-label">Course Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="course_name">
            </div>
          </div>

         <div class="form-group">
            <label class="col-lg-3 control-label">Course Code:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="course_code">
            </div>
          </div>
         <div class="form-group">
            <label class="col-lg-3 control-label">Credits:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="credits" >
            </div>
          </div>   
           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Submit">
              
            </div>
          </div>  
          {{ csrf_field() }}
 </form>
          
 </div>          

@endsection