@extends('layouts.app')

@section('content')
<?php $base_url="/ims/artist/edit/" ?>
  <div class="spacer"></div>
  <h2 class="heading">IMS Edit Artist</h2>
  <div class="spacer"></div>
  @include('components.artist_show_table')
  @include('components.pagination')
@endsection