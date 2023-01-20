@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/zmeny-standardu.png') }}" rel="shortcut icon">
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
            {{ __($title) ?? '' }} - strana {{$documents->currentPage()}} z {{ $documents->lastPage() }}
          </h2>
        </div>
      </div>
    </div>
  </div>

  @section('buttons')
  <div class="ms-auto d-print-none col-auto">
    <div class="btn-list">
      <div class="d-flex justify-content-end">
        {{ $documents->links() }}
      </div>
    </div>
  </div>
  @endsection



  <!-- Page body -->
  <div class="page-body">
    <div class="container-fluid">
      <div class="h-100">
        <div class="col-12">
          @foreach ($documents as $document)
          <div class="accordion-item">
            <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
              <div class="accordion-body pt-0">
                <div class="list-group list-group-flush list-group-hoverable pt-1">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="avatar bg-{{ $document->category->color }}-lt col-auto" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{ $document->category->category_name }}">
                        <a class="text-decoration-none" href="/standardy/{{ $document->category->folder_name }}/{{ $document->category->id }}">
                          <div class="text-uppercase">
                            {!! $document->category->svg_icon !!}
                          </div>
                        </a>
                      </div>
                      <div class="col-auto">
                        <a href="{{ route('standardy.download', $document->id) }}" target="_blank">
                          <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout standard">
                            <img src="{{ asset('img/files/pdf.png') }}" alt="PDF soubor">
                          </span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a class="text-primary d-block text-decoration-none" href="{{ route('standardy.download', $document->id) }}" target="_blank">
                          <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                        </a>
                        <div class="d-block text-muted text-truncate">{{ $document->description }}</div>
                      </div>
                      <div class="col-auto">
                        @auth
                        <svg class="icon icon-tabler icon-tabler-calendar-event text-azure" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                          <line x1="16" y1="3" x2="16" y2="7"></line>
                          <line x1="8" y1="3" x2="8" y2="7"></line>
                          <line x1="4" y1="11" x2="20" y2="11"></line>
                          <rect x="8" y="15" width="2" height="2"></rect>
                        </svg>
                        <span class="text-muted">upraveno {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                        @endauth
                        @if (Carbon\Carbon::parse($document->created_at)->addDays(1) >= Carbon\Carbon::today())
                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                        @endif
                        @if (Carbon\Carbon::parse($document->updated_at)->addDays(7) >= Carbon\Carbon::now())
                        <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                        @endif
                        <svg class="icon icon-tabler icon-tabler-certificate text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="15" cy="15" r="3"></circle>
                          <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                          <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                          <line x1="6" y1="9" x2="18" y2="9"></line>
                          <line x1="6" y1="12" x2="9" y2="12"></line>
                          <line x1="6" y1="15" x2="8" y2="15"></line>
                        </svg>
                        <span class="text-muted">Revize: {{ $document->revision }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Wrapper End -->
@endsection
