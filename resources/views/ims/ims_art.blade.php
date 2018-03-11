@extends('layouts.app')

@section('content')
  <div class="spacer"></div>
  <h2 class="heading">IMS Art Panel</h2>
  <div class="spacer"></div>
  <div class="container">
    <div class="row top_buffer">
      <div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
        <a class="page-link" href="{{url()->current()}}/add"><img src='\storage\media\ims_images\add_art.png' class="img-fluid"></a>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
        <a class="page-link" href="{{url()->current()}}/edit"><img src='\storage\media\ims_images\edit_art.png' class="img-fluid"></a>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
        <a class="page-link" href="{{url()->current()}}/remove"><img src='\storage\media\ims_images\remove_art.png' class="img-fluid"></a>
      </div>
  </div>
</div>
@endsection