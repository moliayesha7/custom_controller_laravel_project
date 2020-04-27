@extends('layout')

@section('main-content')
	
	
	<div class="main-section">
		<a class="btn btn-sm btn-success"href="{{url('/')}}">All Students</a>
	<div class="card">
	<div class="card-body">
	<h2>Edit {{$edit_data->first_name}} {{$edit_data->last_name}} Data</h2>
<hr/>

<form action="{{url('update-student',$edit_data->id)}}" method="POST" >
@csrf
  <div class="form-group">
    <label >First Name</label>
    <input name="fname" type="text" value="{{$edit_data->first_name}}" class="form-control">
  </div>
  <div class="form-group">
    <label >Last Name</label>
    <input name="lname" type="text" value="{{$edit_data->last_name}}" class="form-control">
  </div>
  
  <div class="form-group">

    <input name="submit" type="submit" class="btn btn-success btn-block" >
  </div>
  
</form>



	</div>
	</div>
	</div>

@endsection
