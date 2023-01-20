@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/prehledy.png') }}" rel="shortcut icon">
@endsection

@section('content')
{{-- Page wrapper --}}
<div class="page-wrapper">

  {{-- Page header --}}
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center">

        {{-- Page pre-title --}}
        <div class="col">
          <div class="page-pretitle text-primary">
            {{ __($pretitle) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
        {{-- End Page pre-title --}}

        {{-- Page buttons --}}
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              {{-- Buttons --}}
            </div>
          </div>
        </div>
        {{-- End Page buttons --}}

      </div>
    </div>
  </div>

  {{-- Page body --}}
  <div class="page-body">
    <div class="container-fluid">
      <div class="row justify-content-start g-2">


        <div class="col-12 col-md-7 col-lg-7 col-xl-5 col-xxl-4">
          <div class="card" style="height: 36rem">
            <div class="text-left card-header bg-azure-lt">
              <h2 class="col-12 m-1">{{ __($pretitle) ?? 'Empty' }} - {{ __($title) ?? 'Empty' }}</h2>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  {{-- End Page body --}}

</div>
<!-- Wrapper End -->
@endsection
