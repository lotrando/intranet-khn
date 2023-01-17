@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/kantyna.png') }}" rel="shortcut icon">
@endsection

@section('buttons')
{{ $daylist->onEachSide(7)->links() }}
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
</div>
<!-- Wrapper End -->

<!-- Page body -->
<div class="page-body">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card" style="height: 35rem">
          <div class="card-body card-body-scrollable card-body-scrollable-shadow">
            <div class="divide-y">
              @foreach ($daylist as $day)
              @if (date('N', strtotime($day->date)) >= 6)
              <div>
                <div class="row">
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <span class="avatar bg-pink-lt"><strong>{{ Carbon\Carbon::parse($day->date)->format('d|m') }}</strong></span>
                  </div>
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <span>
                      <div class="text-pink">{{ Carbon\Carbon::parse($day->date)->locale('cs')->dayName }}</div>
                    </span>
                  </div>
                  <div class="col-1 d-flex align-items-center">
                    <div class="text-truncate">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-meat-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821"></path>
                        <path d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z"></path>
                        <path d="M7.5 16l1 1"></path>
                        <path d="M12.975 21.425c1.582 -1.582 2.679 -3.407 3.242 -5.2"></path>
                        <path d="M16.6 12.6c-.16 -1.238 -.653 -2.345 -1.504 -3.195c-.85 -.85 -1.955 -1.344 -3.192 -1.503"></path>
                        <path d="M8.274 8.284c-1.792 .563 -3.616 1.66 -5.198 3.242"></path>
                        <path d="M3 3l18 18"></path>
                      </svg>
                    </div>
                  </div>
                  @if (Carbon\Carbon::parse($day->date) == Carbon\Carbon::today())
                  <div class="col-1 align-self-center">
                    <div class="badge bg-red-lt">Litujeme, ale dnes je kantýna bohužel uzavřena !</div>
                  </div>
                  @endif
                </div>
              </div>
              @else
              <div>
                <div class="row">
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <span class="avatar bg-azure-lt"><strong>{{ Carbon\Carbon::parse($day->date)->format('d|m') }}</strong>
                    </span>
                  </div>
                  <div class="col-1 d-flex align-items-center justify-content-center">
                    <span>
                      <div class="text-azure">{{ Carbon\Carbon::parse($day->date)->locale('cs')->dayName }}</div>
                    </span>
                  </div>
                  <div class="col-6 flex align-items-center justify-content-start">
                    <div class="text-truncate mt-1">
                      Kuře
                    </div>
                    <div class="text-truncate">
                      Hrachová
                    </div>
                  </div>
                  @if (Carbon\Carbon::parse($day->date) == Carbon\Carbon::today())
                  <div class="col-4 d-flex align-self-center justify-content-end">
                    <div class="badge bg-lime-lt">Aktuální dnešní nabídka. Co si dnes dáte ?</div>
                  </div>
                  @endif
                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
