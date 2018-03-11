@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  <h2 class="heading">IMS Add Art</h2>
  <div class="spacer"></div>
	@if(session()->has('message'))
	<div class="alert alert-success">
	    {{ session()->get('message') }}
	</div>
	@endif 
  {!!Form::open(['action' => 'ImsController@art_post', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
  	@include('components.form.art_add_form')
  {!!Form::close()!!}
@endsection