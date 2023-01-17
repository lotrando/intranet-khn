@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/zmeny.png') }}" rel="shortcut icon">
@endsection

@section('content')
<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- Page pre-title -->
        <div class="col">
          <div class="page-pretitle text-primary">
            {{ __($pretitle) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
  <div class="page-body">
    <div class="container-fluid">
      <div class="h-100">
        <div class="col-12">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Wrapper End -->
@endsection
