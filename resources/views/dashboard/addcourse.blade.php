@extends('layouts.dash')

@section('content')

<div class="row">
      <!-- left column -->
      
      <!-- edit form column -->

        <h3>New course details</h3>
        
        <form class="form-horizontal" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label">Course Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Enter Course Name" >
            </div>
          </div>

         <div class="form-group">
            <label class="col-lg-3 control-label">Course Code:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Enter Course Code" >
            </div>
          </div>
         <div class="form-group">
            <label class="col-lg-3 control-label">Credits:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Enter Credits" >
            </div>
          </div>   
           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Submit">
              
            </div>
          </div>  
 </form>
          
 </div>          

@endsection