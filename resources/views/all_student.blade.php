@extends('layout')

@section('main-content')
	
	
	<div class="main-section">
		<a class="btn btn-sm btn-success"href="{{url('add_new_student')}}">Add New Student</a>
	<div class="card">
	<div class="card-body">
	<h2>All Students</h2>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Photo</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $d)
    <tr>
      <th scope="row">1</th>
      <td>{{$d->first_name}}</td>
      <td>{{$d->last_name}}</td>
      <td><img style="width:60px;height:60px;"src="public/students_photo/{{$d->photo}}" alt=""></td>
	  <td>
	  
	  <a class="btn btn-sm btn-info" href="{{url('view_single_student',$d->id)}}">View</a>

	  <a class="btn btn-sm btn-warning" href="{{url('edit_student',$d->id)}}">Edit</a>

	  <a class="btn btn-sm btn-danger"href="{{url('delete_student',$d->id)}}">Delete</a>
	  </td>
    </tr>
   @endforeach
  </tbody>
</table>




	</div>
	</div>
	</div>

@endsection
