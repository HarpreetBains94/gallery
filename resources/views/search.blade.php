@extends('layouts.app')

@section('content')

<?php $base_url="/showroom//search" ?>
<div class="spacer"></div>
	<h2 class='heading'>Search</h2>
<div class="spacer"></div>
{!!Form::open(array('route' => 'arts.search', 'method'=>'POST'))!!}
	@include('components.form.art_search_form')
{!!Form::close()!!}
@endsection