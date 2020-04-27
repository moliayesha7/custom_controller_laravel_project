@extends('layout')

@section('main-content')
	
	
	<div class="main-section">
		<a class="btn btn-sm btn-success"href="{{url('/')}}">All Students</a>
	<div class="card">
	<div class="card-body">
	<h2>Student Info</h2>
<div class="single-student">
  <img class="img-thumbnail" src="{{URL::to('public/students_photo/'.$single_student->photo)}}" alt="">
  <h2>{{$single_student->first_name}}{{$single_student->last_name}}</h2>
  <a class="btn btn-sm btn-success" href="">Edit</a>
</div>
	




	</div>
	</div>
	</div>

@endsection
