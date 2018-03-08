@extends('layouts.app')

@section('content')
<div class='spacer'></div>
<h2 class='heading'>{{$art[0]->title}}</h2>
<div class='spacer'></div>
<div class="container">
	<div class="row top_buffer">
		<div class="col-sm-12 col-md-12 col-lg-7">
				<img src='\{{ $art[0]->image_path }}' id='art-show' class="img-fluid">
				<div class='spacer'></div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-5">
			<div>Artist: <a href="/artist/id={{$artist[0]->id}}">{{$artist[0]->name}}</a></div>
			<div>Price: £{{$art[0]->price}}</div>
			<div>Dimensions: {{$art[0]->dimensions}} (cm)</div>
			<div>Medium: {{$art[0]->medium}}</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class='spacer'></div>
			<div>{{$art[0]->description}}</div>
			<div class='spacer'></div>
		</div>
	</div>
</div>
@endsection