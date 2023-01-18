@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/test.png') }}" rel="shortcut icon">
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
      <div class="row">
        <div class="col-12 mb-5">

          {{ Form::open(['url' => 'foo/bar']) }}
          {!! Form::token() !!}
          {!! Form::text('email', 'example@gmail.com', ['class' => 'form-control mb-2']) !!}
          {!! Form::text('user', 'User', ['class' => 'form-control mb-2']) !!}
          {{ Form::label('prmal', null, ['class' => 'control-label']) }}
          {!! Form::select('animal',[
          'Cats' => ['leopard' => 'Leopard'],
          'Dogs' => ['spaniel' => 'Spaniel'],
          ], '', ['class' => 'form-select mb-2']) !!}
          <div class="form-group">
            {{ Form::label('test', null, ['class' => 'control-label']) }}
            {{ Form::text('test', 'pokus', ['class' => 'form-control']) }}
          </div>
          {!! Form::submit('Click Me!', ['class' => 'btn btn-primary mt-1']) !!}
          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

</div>
<!-- Wrapper End -->
@endsection

@section('scripts')
<script src="{{ asset('') }}"></script>
@endsection
