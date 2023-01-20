@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/home.png') }}" rel="shortcut icon">
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
          <div class="card" style="height: 40rem">
            <div class="text-left card-header bg-cyan-lt">
              <div class="d-flex justify-item-center align-items-center">
                <div class="col-auto avatar bg-cyan-lt">
                  <svg class="icon text-cyan" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                    </path>
                  </svg>
                </div>
                <div>
                  <h2 class="col-auto mb-0 ms-2">Odstávka vody ...</h2>
                </div>
              </div>
            </div>
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
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
