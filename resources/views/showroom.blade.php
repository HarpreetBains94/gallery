@extends('layouts.app')

@section('content')

<?php $base_url="/showroom/" ?>
<base href="/showroom/" />
<div class="spacer"></div>
	<h2 class='heading'>Showroom</h2>
<div class="spacer"></div>
<div class="container">
	<p class="center">Looking for something more specific? Try our search. <a href="/showroom/search"><button class="btn btn-primary" type="button">Search</button></a></p>
</div>


@include('components.art_show')
@include('components.pagination')
@endsection