@extends('layouts.app')

@section('content')
<?php $base_url="/events/" ?>
  <div class="spacer"></div>
  <h2 class="heading">CMS Edit Events</h2>
  <div class="spacer"></div>
  @include('components.event_show_table')
  @include('components.pagination')
@endsection