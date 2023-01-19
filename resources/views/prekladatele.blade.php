@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/prekladatele.png') }}" rel="shortcut icon">
@endsection

@section('content')
<!-- Page wraper -->
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
  <!-- End Page header -->

  <!-- Page body -->
  <div class="page-body">
    <div class="container-fluid">
      <div class="row row-cards justify-content-center">

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-pl"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/60321.jpg') }}" alt="MUDr. Brzeżański Henryk">
              </div>
              <h3 class="fw-bold my-3">MUDr. Brzeżański Henryk</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Polština
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-gb"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/60321.jpg') }}" alt="MUDr. Brzeżański Henryk">
              </div>
              <h3 class="fw-bold my-3">MUDr. Brzeżański Henryk</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Angličtina
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-gb"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/60321.jpg') }}" alt="MUDr. Brzeżański Henryk">
              </div>
              <h3 class="fw-bold my-3">MUDr. Brzeżański Henryk</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Angličtina
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-fr m-0"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/61316.jpg') }}" alt="MUDr. Holomek Karel">
              </div>
              <h3 class="fw-bold my-3">MUDr. Holomek Karel</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Fancouština
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-de m-0"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/60321.jpg') }}" alt="MUDr. Brzeżański Henryk">
              </div>
              <h3 class="fw-bold my-3">MUDr. Brzeżański Henryk</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Němčina
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-2">
          <div class="card card-sm hover-shadow-sm">
            <div class="ribbon ribbon-top bg-azure-lt">
              <span class="flag flag-country-ua m-0"></span>
            </div>
            <div class="card-body text-center">
              <div class="avatar avatar-lg">
                <img class="rounded-2 shadow mb-2" src="{{ asset('foto/60321.jpg') }}" alt="MUDr. Brzeżański Henryk">
              </div>
              <h3 class="fw-bold my-3">MUDr. Brzeżański Henryk</h3>

              <ul class="list-unstyled lh-lg">
                <li>
                  Ukrajinština
                </li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card card-md">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="h3">Enterprise-ready. Reach out for a custom quote.</h2>
                  <p class="m-0 text-muted">Tabler is designed to work great for large enterprises. Take a look at our feature comparison.</p>
                </div>
                <div class="col-auto">
                  <a href="#" class="btn">
                    Book a demo
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
{{-- End page wrapper --}}
@endsection
