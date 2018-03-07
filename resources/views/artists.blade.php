@extends('layouts.app')

@section('content')
	<div class="spacer"></div>
		<h2>{{$artist[0]->name}}</h2>
	<div class="spacer"></div>
	@include('components.art_show')
@endsection