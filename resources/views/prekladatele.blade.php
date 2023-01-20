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
    <div class="container">
      <div class="row justify-content-center g-4">

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-lg flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <h2 class="fw-bold my-1">MUDr. Sýkora Dušan</h2>
                <div class=" text-center mt-3">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-lg flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <h2 class="fw-bold my-1">MUDr. Sýkora Dušan</h2>
                <div class=" text-center mt-3">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-lg flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <h2 class="fw-bold my-1">MUDr. Sýkora Dušan</h2>
                <div class=" text-center mt-3">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <h2 class="fw-bold my-4">MUDr. Sýkora Dušan</h2>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-4">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <h2 class="fw-bold my-4">MUDr. Sýkora Dušan</h2>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-4">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-4">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body p-4 text-center">
              <h2 class="fw-bold my-4">MUDr. Sýkora Dušan</h2>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-4">
                  <a href="#" class="btn bg-azure-lt w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body text-center">
              <div class="avatar avatar-lg shadow">
                <img class="rounded-2 shadow-sm mb-3" src="{{ asset('foto/63416.jpg') }}" alt="MUDr. Sýkora Dušan">
              </div>
              <h3 class="fw-bold mt-3">MUDr. Sýkora Dušan</h3>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-2">
                  <a href="#" class="btn bg-azure-lt p-2 w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body text-center">
              <div class="avatar avatar-lg shadow">
                <img class="rounded-2 shadow-sm mb-3" src="{{ asset('foto/63416.jpg') }}" alt="MUDr. Sýkora Dušan">
              </div>
              <h3 class="fw-bold mt-3">MUDr. Sýkora Dušan</h3>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-2">
                  <a href="#" class="btn bg-azure-lt p-2 w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="card card-sm hover-shadow-sm">
            <div class="card-body text-center">
              <div class="avatar avatar-lg shadow">
                <img class="rounded-2 shadow-sm mb-3" src="{{ asset('foto/63416.jpg') }}" alt="MUDr. Sýkora Dušan">
              </div>
              <h3 class="fw-bold mt-3">MUDr. Sýkora Dušan</h3>
              <ul class="list-unstyled lh-lg">
                <li>
                  <span class="flag flag-md flag-country-gb"></span>
                </li>
                <li>
                  Angličtina
                </li>
                <div class="text-center mt-2">
                  <a href="#" class="btn bg-azure-lt p-2 w-100">Kontaktovat překladatele</a>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card card-md">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="h3">Překladatelé</h2>
                  <p class="m-0 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam saepe quibusdam numquam quasi dolorum possimus maxime earum dignissimos commodi, suscipit laborum eveniet veritatis blanditiis inventore. Doloremque quam accusantium molestiae a aliquam voluptate, at ea ipsa voluptatum vero eius, fugit ipsam. Sit ipsam cum molestias quo quia consectetur placeat neque voluptatem?</p>
                </div>
                <div class="col-auto">
                  <a href="#" class="btn btn-lime">
                    Více informací
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
