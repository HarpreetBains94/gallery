<div class="container">
  	<div class="row top_buffer">
  	@foreach ($images as $image)
  		<div class="col-sm-12 col-md-6 col-lg-4 showroomImage">
  			<a class="page-link" href="/art_view/id={{ $image->id }}"><img src='\{{ $image->image_path }}' class="img-fluid"></a>
    	</div>
  	@endforeach
	</div>
	<nav aria-label="Page navigation example" >
		<div>
			<ul class="pagination justify-content-center" >
				@for ($i = 1; $i<=$page_count;$i++)
					<li class="page-item"><a class="page-link" href="/showroom/page={{$i}}">{{$i}}</a></li>
				@endfor
			</ul>
		</div>
	</nav>
</div>