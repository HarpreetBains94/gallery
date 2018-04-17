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
    {!!Form::open(array('route' => 'arts.store', 'files' => true))!!}
    	@include('components.form.art_add_form')
    {!!Form::close()!!}
  @endif
@if(isset($art))
    {!!Form::open(array('route' => ['arts.update', $art[0]->id], 'files' => true, 'method' => 'PUT'))!!}
      @include('components.form.art_add_form')
    {!!Form::close()!!}
  @endif
@endsection