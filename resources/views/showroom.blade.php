@extends('layouts.app')

@section('content')

<?php $base_url="/showroom/" ?>
<base href="/showroom/" />
<div class="spacer"></div>
	<h2 class='heading'>Showroom</h2>
<div class="spacer"></div>
@include('components.art_show')
@include('components.pagination')
@endsection