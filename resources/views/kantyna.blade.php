@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/akord.png') }}" rel="shortcut icon">
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
        <div class="card" style="height: 23rem">
          <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y">
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-indigo-lt">{{ __('PO') }}</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Lasagne</strong>
                    </div>
                    <div class="text-muted">polévka: Gulášová</div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="badge bg-lime-lt">Dnešní nabídka</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-pink-lt">{{ __('ÚT') }}</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Francouzké brambory</strong>
                    </div>
                    <div class="text-muted">polévka: Bramborová</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-orange-lt">{{ __('ST') }}</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Bramboráky</strong>
                    </div>
                    <div class="text-muted">polévka: Rajská</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-lime-lt">{{ __('ČT') }}</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Sekaná</strong>
                    </div>
                    <div class="text-muted">polévka: Čočková</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-auto">
                    <span class="avatar bg-teal-lt">{{ __('PÁ') }}</span>
                  </div>
                  <div class="col">
                    <div class="text-truncate">
                      <strong>Stehení řízky</strong>
                    </div>
                    <div class="text-muted">polévka: Dršťková</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
