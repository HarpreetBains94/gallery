@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2 class="heading">Event</h2>
<div class="spacer"></div>
<div class="container">
	<div class="subheading">{{$event->title}}</div>
	<div>Price: £{{$event->price}}</div>
	<div>{{$event->description}}</div>
</div>
	
@endsection