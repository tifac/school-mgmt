@extends('layouts.dash')

@section('content')

 <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/pic') }}">

          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-lg-8">
				<input type="file" onchange="previewFile()"><br>
				<img src="" height="200" alt="Image preview...">

            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-lg-8">
				<input type="file" onchange="previewFile()"><br>
				<img src="" height="200" alt="Image preview...">

            </div>
          </div>

          {{ csrf_field() }}
 </form>

<script>
   function previewFile(){
       var preview = document.querySelector('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();  //calls the function named previewFile()
  </script>

 
@endsection