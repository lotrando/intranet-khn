@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="./img/home.png" rel="shortcut icon">
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
        <div class="row g-2">

          @foreach ($notifications as $notification)
            <div class="col-12 col-md-6">
              <div class="card shadow-sm">
                <div class="bg-{{ $notification->type }}-lt text-left">
                  <div class="card-body p-2">
                    <div class="d-flex align-items-top justify-content-start">
                      <div class="avatar bg-transparent">
                        <span
                          class="avatar bg-{{ $notification->type ?? 'muted' }}-lt pt-1"><strong>{{ Carbon\Carbon::parse($notification->created_at)->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                      </div>
                      <div class="px-3">
                        <h2>{{ $notification->title }}</h2>
                        <p class="d-block description text-muted text-truncate">
                          Autor: {{ $notification->user->name }}
                        </p>
                        <p class="text-muted mb-1 text-start">
                          {!! $notification->content !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

          {{-- <div class="col-12 col-md-7 col-lg-4 col-xl-4 col-xxl-6">
            <div class="card shadow-sm">
              <div class="bg-red-lt text-left">
                <div class="card-body p-2">
                  <div class="d-flex align-items-top justify-content-start">
                    <div class="avatar bg-transparent">
                      <span
                        class="avatar bg-red-lt pt-1"><strong>{{ Carbon\Carbon::now()->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                    </div>
                    <div class="px-3">
                      <h2>Důležité oznámení !</h2>
                      <p class="mb-1 text-start">Officia dolore debitis esse rem eligendi illum accusamus alias molestiae
                        laboriosam!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-7 col-lg-6 col-xl-4 col-xxl-6">
            <div class="card shadow-sm">
              <div class="bg-lime-lt text-left">
                <div class="card-body p-2">
                  <div class="d-flex align-items-top justify-content-start">
                    <div class="avatar bg-transparent">
                      <span
                        class="avatar bg-lime-lt pt-1"><strong>{{ Carbon\Carbon::now()->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                    </div>
                    <div class="px-3">
                      <h2>Normální oznámení !</h2>
                      <p class="mb-1 text-start">Officia dolore debitis esse rem eligendi illum accusamus alias molestiae
                        laboriosam!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-7 col-lg-4 col-xl-6 col-xxl-6">
            <div class="card shadow-sm">
              <div class="bg-info-lt text-left">
                <div class="card-body p-2">
                  <div class="d-flex align-items-top justify-content-start">
                    <div class="avatar bg-transparent">
                      <span
                        class="avatar bg-info-lt pt-1"><strong>{{ Carbon\Carbon::now()->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                    </div>
                    <div class="px-3">
                      <h2>Informativní oznámení !</h2>
                      <p class="mb-1 text-start">Officia dolore debitis esse rem eligendi illum accusamus alias molestiae
                        laboriosam!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-7 col-lg-4 col-xl-6 col-xxl-6">
            <div class="card shadow-sm">
              <div class="bg-yellow-lt text-left">
                <div class="card-body p-2">
                  <div class="d-flex align-items-top justify-content-start">
                    <div class="avatar bg-transparent">
                      <span
                        class="avatar bg-yellow-lt pt-1"><strong>{{ Carbon\Carbon::now()->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                    </div>
                    <div class="px-3">
                      <h2>Varovné oznámení !</h2>
                      <p class="mb-1 text-start">Officia dolore debitis esse rem eligendi illum accusamus alias molestiae
                        laboriosam!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-7 col-lg-4 col-xl-12 col-xxl-6">
            <div class="card shadow-sm">
              <div class="bg-purple-lt text-left">
                <div class="card-body p-2">
                  <div class="d-flex align-items-top justify-content-start">
                    <div class="avatar bg-transparent">
                      <span
                        class="avatar bg-purple-lt pt-1"><strong>{{ Carbon\Carbon::now()->format('d|m') }}<br>{{ Carbon\Carbon::now()->format('Y') }}</strong></span>
                    </div>
                    <div class="px-3">
                      <h2>Velké poděkování</h2>
                      <p class="mb-1 text-start">DĚKUJEME všem pracovníkům stravovacího provozu za dnešní "snídaňové
                        menu", které u příležitosti MDŽ pro naše zaměstnankyně připravili.</p>
                      <p style="text-align: right">Bylo to vynikající !!!!!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
      {{-- End Page body --}}

    </div>
    <!-- Wrapper End -->
  @endsection
