@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2>Showroom</h2>
<div class="spacer"></div>
<div class="container">
  <div class="row top_buffer">
  @foreach ($images as $image)
  	<div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
      <img src='{{ $image->image_path }}' class="img-fluid">
    </div>
  @endforeach
</div>
@endsection