@extends('layouts.app')

@section('content')
<div class='spacer'></div>
<h2 class='heading'>{{$art[0]->title}}</h2>
<div class='spacer'></div>
<div class="container">
	<div class="row top_buffer">
		<div class="col-sm-12 col-md-12 col-lg-7">
				<img src='\storage\media\test_images\{{ $art[0]->image_path }}' id='art-show' class="img-fluid">
				<div class='spacer'></div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-5">
			<div>Artist: <a href="/artists/id={{$artist[0]->id}}/page=1">{{$artist[0]->name}}</a></div>
			<div>Price: £{{number_format($art[0]->price, 2, '.', '')}}</div>
			<div>Dimensions: {{$art[0]->dimensions}} (cm)</div>
			<div>Medium: {{$art[0]->medium}}</div>
			<div class="spacer"></div>
			{!!Form::open(['action' => 'ImsController@artist_post', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    			@include('components.form.appointment_form')
  			{!!Form::close()!!}

			
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class='spacer'></div>
			<div>{{$art[0]->description}}</div>
			<div class='spacer'></div>
		</div>
	</div>
</div>
@endsection