@extends('layouts.app')

@section('content')
<?php $base_url="/appointments/" ?>
  <div class="spacer"></div>
  <h2 class="heading">Appointments</h2>
  <div class="spacer"></div>
  @include('components.appointment_show_table')
  @include('components.pagination')
@endsection