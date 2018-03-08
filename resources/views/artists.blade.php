@extends('layouts.app')

@section('content')
<base href="/artist/id={{$artist[0]->id}}/" />
	<div class="spacer"></div>
		<h2 class='heading'>{{$artist[0]->name}}</h2>
	<div class="spacer"></div>
	<div class="container">
		<div class="row top_buffer">
			<div class="col-sm-12 col-md-12 col-lg-7">
					<img src='\{{ $artist[0]->image_path }}' id='art-show' class="img-fluid">
					<div class='spacer'></div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-5">
				<div>{{$artist[0]->bio}}</div>
				<div class='spacer'></div>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
		<h3 class='subheading'>More by {{$artist[0]->name}}</h3>
	<div class="spacer"></div>
	@include('components.art_show')
	@include('components.pagination')
@endsection