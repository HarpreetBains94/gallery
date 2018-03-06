@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row top_buffer">
		<div class="col-sm-12 col-md-8 col-lg-8">
				<img src='\{{ $art[0]->image_path }}' id='art-show'>
				<div>{{$art[0]->title}}</div>
				<div>{{$art[0]->price}}</div>
				<div>{{$art[0]->dimensions}}</div>
				<div>{{$art[0]->medium}}</div>
				<div>{{$art[0]->description}}</div>
				<div>{{$artist[0]->name}}</div>
		</div>
	</div>
</div>
@endsection