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
      <div class="row row-cards">
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title">Evanescence - Zombie | Sax Cover | Alexandra Ilieva</h3>
              <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="eWkvojhw0eo"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title">Vimeo Player</h3>
              <div id="player-vimeo" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
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

@section('scripts')
<script>
  // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.Plyr && (new Plyr('#player-youtube'));
      });
      // @formatter:on
</script>

<script>
  // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.Plyr && (new Plyr('#player-vimeo'));
      });
      // @formatter:on
</script>
@endsection
