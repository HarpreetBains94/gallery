@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  @if(isset($artist))
  <h2 class="heading">IMS Edit Artist</h2>
  @endif
  @if(!isset($artist))
  <h2 class="heading">IMS Add Artist</h2>
  @endif
  <div class="spacer"></div>
	@if(session()->has('message'))
	<div class="alert alert-success">
	    {{ session()->get('message') }}
	</div>
	@endif 

  @if(isset($artist))

  {!!Form::open(array('route' => ['artists.update', $artist[0]->id], 'files' => true, 'method' => 'PUT'))!!}
    @include('components.form.artist_add_form')
  {!!Form::close()!!}

  @endif

  @if(!isset($artist))

  {!!Form::open(array('route' => 'artists.store', 'files' => true))!!}
    @include('components.form.artist_add_form')
  {!!Form::close()!!}

  @endif
@endsection