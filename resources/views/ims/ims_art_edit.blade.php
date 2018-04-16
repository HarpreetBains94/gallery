@extends('layouts.app')

@section('content')
<?php $base_url="/arts/index/" ?>
  <div class="spacer"></div>
  <h2 class="heading">IMS Edit Art</h2>
  <div class="spacer"></div>
  @include('components.art_show_table')
  @include('components.pagination')
@endsection