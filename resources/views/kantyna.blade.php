@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/kantyna.png') }}" rel="shortcut icon">
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
            {{ __($category) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Wrapper End -->

<!-- Page body -->
<div class="page-body">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card" style="height: 32rem">
          <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y">
              @foreach ($daylist as $day)
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-azure-lt"><strong>{{ Carbon\Carbon::parse($day->date)->format('d') }}</strong></span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>{{ Carbon\Carbon::parse($day->date)->locale('cs')->dayName }}</strong>
                    </div>
                    <div class="text-muted">polévka: {{ Carbon\Carbon::parse($day->date)->format('YYYY') }}</div>
                  </div>
                  @if (Carbon\Carbon::parse($day->date) == Carbon\Carbon::today())
                  <div class="col-auto align-self-center">
                    <div class="badge bg-lime-lt">Dnešní nabídka</div>
                  </div>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-3">
          {{ $daylist->links() }}
        </div>
      </div>
    </div>
  </div>
  @endsection
