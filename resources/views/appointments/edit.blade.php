@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  <h2 class="heading">Approve Appointment</h2>
  <div class="spacer"></div>
	@if(session()->has('message'))
	<div class="alert alert-success">
	    {{ session()->get('message') }}
	</div>
	@endif 
    {!!Form::open(['route' => ['appointments.update', $appointment], 'method' => 'PUT'])!!}
    	@include('components.form.appointment_approve_form')
    {!!Form::close()!!}
@endsection