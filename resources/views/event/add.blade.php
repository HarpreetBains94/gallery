@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  @if(isset($event))
  <h2 class="heading">IMS Add Event</h2>
  @endif
  @if(!isset($event))
  <h2 class="heading">IMS Edit Event</h2>
  @endif
  <div class="spacer"></div>
	@if(session()->has('message'))
	<div class="alert alert-success">
	    {{ session()->get('message') }}
	</div>
	@endif 
  @if(!isset($event))
    {!!Form::open(array('route' => 'events.store', 'files' => true))!!}
    	@include('components.form.event_add_form')
    {!!Form::close()!!}
  @endif
@if(isset($event))
    {!!Form::open(array('route' => ['events.update', $event[0]->id], 'files' => true, 'method' => 'PUT'))!!}
      @include('components.form.event_add_form')
    {!!Form::close()!!}
  @endif
@endsection