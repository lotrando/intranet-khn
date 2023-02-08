@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="{{ asset('img/zmeny-dokumentu.png') }}" rel="shortcut icon">
@endsection

@section('content')
  {{-- Page Wrapper Start --}}
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
  </div>

  <!-- Page -->
  <div class="row container-fluid mt-2">
    <div class="col-12">
      <div class="accordion-item">
        <div class="accordion-body p-1">
          <div class="list-group list-group-flush list-group-hoverable pt-1">
            <div class="list-group-item py-1 px-2">
              <div class="row d-flex justify-content-start">
                <div class="text-muted text-truncate">Nebyly nalezeny žádné změny v dokumentaci</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page End -->
    </div>
    <!-- Page Wrapper End -->
  </div>
@endsection
