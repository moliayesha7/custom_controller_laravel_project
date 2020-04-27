@extends('layout')

@section('main-content')
	
	
	<div class="main-section">
		<a class="btn btn-sm btn-success"href="{{url('/')}}">All Students</a>
	<div class="card">
	<div class="card-body">
	<h2>Add Students</h2>
<hr/>

<form action="{{url('add-new-student-data')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label >First Name</label>
    <input name="fname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Last Name</label>
    <input name="lname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label >Photo</label>
    <input name="photo" type="file" >
  </div>
  <div class="form-group">

    <input name="submit" type="submit" class="btn btn-success btn-block" >
  </div>
  
</form>



	</div>
	</div>
	</div>

@endsection
