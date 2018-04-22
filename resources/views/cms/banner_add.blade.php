@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2 class="heading">Edit Banner</h2>
<div class="spacer"></div>
{!!Form::open(array('route' => 'banner.update', 'files' => true ,'method'=>'PUT'))!!}
	@include('components.form.banner_form')
{!!Form::close()!!}
	

@endsection