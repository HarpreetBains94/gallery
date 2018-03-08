<nav aria-label="Page navigation example" >
	<div>
		<ul class="pagination justify-content-center" >
			@for ($i = 1; $i<=$page_count;$i++)
				<li class="page-item"><a class="page-link" href=page={{$i}}>{{$i}}</a></li>
			@endfor
		</ul>
	</div>
</nav>