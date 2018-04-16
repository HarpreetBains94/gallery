@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  @if(isset($art))
  <h2 class="heading">IMS Edit Art</h2>
  @endif
  @if(!isset($art))
  <h2 class="heading">IMS Add Art</h2>
  @endif
  <div class="spacer"></div>
	@if(session()->has('message'))
	<div class="alert alert-success">
	    {{ session()->get('message') }}
	</div>
	@endif 
  @if(!isset($art))
    {!!Form::open(['action' => 'ImsController@art_post', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    	@include('components.form.art_add_form')
    {!!Form::close()!!}
  @endif
<!--   @if(isset($art))
    {!!Form::open(['action' => 'ArtController@', 'method' => 'PUT', 'enctype' => 'multipart/form-data'])!!}
      @include('components.form.art_add_form')
    {!!Form::close()!!}
  @endif -->
@endsection