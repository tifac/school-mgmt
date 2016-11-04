@extends('layouts.dash')

@section('content')

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

  <div class="row">
      <!-- left column -->
      
      <!-- edit form column -->

        <h3>Add new staff</h3>
        
        <form class="form-horizontal" role="form" method="post" action="{{ url('/dashboard/staff/assign') }}">

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="name">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Qualification:</label>
            <div class="col-lg-8">
              <input type="date" class="form-control" name="qualification">
            </div>
           </div>

           <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <textarea name="address" class="form-control" rows="3"></textarea>
            </div>
           </div>

           <div class="form-group">
            <label class="col-lg-3 control-label">Contact:</label>
            <div class="col-lg-8">
              <input type="date" class="form-control" name="contact">
            </div>
           </div>

           <div class="form-group">
            <label class="col-lg-3 control-label">Date of Joining:</label>
            <div class="col-lg-8">
              <input type="date" class="form-control" name="joining_date">
            </div>
           </div>

          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="email">
            </div>
            </div>

           <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="" name="password">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
          {{ csrf_field() }}
        </form>

      </div>

@endsection