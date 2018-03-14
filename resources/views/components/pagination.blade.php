
<nav aria-label="Page navigation example" >
	<div>
		<ul class="pagination pagination-lg justify-content-center" >
			<li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
			@for ($i = 1; $i<=$page_count;$i++)
				<li class="page-item"><a class="page-link" href="{{$base_url}}page={{$i}}">{{$i}}</a></li>
			@endfor
			<li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
		</ul>
	</div>
</nav>