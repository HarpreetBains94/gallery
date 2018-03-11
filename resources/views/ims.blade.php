@extends('layouts.app')

@section('content')
	<div class="spacer"></div>
	<h2 class="heading">IMS</h2>
	<div class="spacer"></div>
	<div class="container">
  	<div class="row top_buffer">
  		<div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
  			<a class="page-link" href="{{url()->current()}}/art"><img src='\storage\media\ims_images\art.png' class="img-fluid"></a>
    	</div>
    	<div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
  			<a class="page-link" href="{{url()->current()}}/artists"><img src='\storage\media\ims_images\artists.png' class="img-fluid"></a>
    	</div>
	</div>
</div>
@endsection