<div class="container">
  	<div class="row top_buffer">
  	@foreach ($images as $image)
  		<div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
  			<a class="page-link" href="/art_view/id={{ $image->id }}"><img src='\storage\media\test_images\{{ $image->image_path }}' class="img-fluid"></a>
  			<span></span>
    	</div>
  	@endforeach
	</div>
</div>