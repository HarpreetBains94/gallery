@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2 class='heading'>Staff Portal</h2>
<div class="spacer"></div>
{{ Form::open(array('url' => 'staff/submit')) }}
    @include('components.form.staff_form')
{{ Form::close() }}
@endsection