@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/zmeny-dokumentace.png') }}" rel="shortcut icon">
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
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              {{ $documents->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
                    <div class="row align-items-center mb-1">
                      <div class="avatar bg-{{ $document->category->color }}-lt col-auto" data-bs-toggle="tooltip" data-bs-placement="right"
                           data-bs-original-title="{{ $document->category->category_name }} standardy">
                        <a href="/dokumenty/{{ $document->category->folder_name }}/{{ $document->category->id }}">
                          <div class="text-uppercase">
                            {!! $document->category->svg_icon !!}
                          </div>
                        </a>
                      </div>
                      <div class="col-auto">
                        <a href="{{ route('dokumenty.download', $document->id) }}" target="_blank">
                          <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout standard">
                            <img src="{{ asset('img/files/pdf.png') }}" alt="PDF soubor">
                          </span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a class="text-primary d-block text-decoration-none" href="{{ route('standardy.download', $document->id) }}" target="_blank">
                          <h3 style="margin-bottom: 0;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout standard">{{ $document->name }}</h3>
                        </a>
                        <div class="d-block description text-muted text-truncate">{{ $document->description }}</div>
                      </div>
                    </div>
                    @foreach ($document->addons as $add)
                    <div class="row align-items-center">
                      <div class="avatar bg-{{ $document->category->color }}-lt col-auto">
                        <div class="text-uppercase" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="#{{ $document->id }}#{{ $add->id }}">
                          <svg class="icon icon-tabler icon-tabler-plus text-{{ $document->category->color }}" width="24" height="24" viewBox="0 0 24 24"
                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg>
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="{{ route('standardy.download', $add->id) }}">
                          <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout přílohu">
                            <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                          </span>
                        </a>
                      </div>
                      <div class="col text-truncate">
                        <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ route('standardy.download', $add->id) }}">
                          <h3 style="margin-bottom: 0;">Příloha č. {{ $add->addon_number }}</h3>
                        </a>
                        <div class="d-block description text-muted text-truncate mt-n1">{{ $document->name }} - {{ $add->description }} - Revize: {{ $add->revision }}</div>
                      </div>
                      {{-- <div class="col-auto">
                        @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                        @endif
                        @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                        <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                        @endif
                        <span class="text-muted description">{{ Carbon\Carbon::parse($add->updated_at)->diffForHumans() }}</span>
                        <svg class="icon icon-tabler icon-tabler-certificate-2 text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="12" cy="15" r="3"></circle>
                          <path d="M10 7h4"></path>
                          <path d="M10 18v4l2 -1l2 1v-4"></path>
                          <path d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2"></path>
                        </svg>
                        <span class="text-muted description">Revize: {{ $add->revision }}</span>
                      </div> --}}
                    </div>
                    @endforeach
                  </div>
                  <div class="list-group-item py-2 px-2">
                    <div class="row d-flex justify-content-between">
                      <div class="col-auto">
                        @if (Carbon\Carbon::parse($document->created_at)->addDays(1) >= Carbon\Carbon::today())
                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                        @endif
                        @if (Carbon\Carbon::parse($document->updated_at)->addDays(7) >= Carbon\Carbon::now())
                        <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                        @endif
                        <span class="text-muted description">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                        <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="15" cy="15" r="3"></circle>
                          <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                          <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                          <line x1="6" y1="9" x2="18" y2="9"></line>
                          <line x1="6" y1="12" x2="9" y2="12"></line>
                          <line x1="6" y1="15" x2="8" y2="15"></line>
                        </svg>
                        <span class="text-muted description">Revize: {{ $document->revision }}</span>
                        @auth
                        @if ($document->status == 'Rozpracováno')
                        <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                        @else
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                        @endif
                        @endauth
                      </div>
                      @auth
                      <div class="col-auto">
                        <span class="text-muted description">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-lime" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                            <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                            <path d="M9 12v-1h6v1"></path>
                            <path d="M12 11v6"></path>
                            <path d="M11 17h2"></path>
                          </svg>
                          Zpracoval: {{ $document->processed }}
                        </span>
                        <span class="text-muted description">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path>
                            <circle cx="16.5" cy="17.5" r="2.5"></circle>
                            <line x1="18.5" y1="19.5" x2="21" y2="22"></line>
                          </svg>
                          Přezkoumal: {{ $document->examine }}
                        </span>
                        <span class="text-muted description">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                            <circle cx="6" cy="14" r="3"></circle>
                            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                          </svg>
                          Autorizoval: {{ $document->authorize }}
                        </span>
                      </div>
                      @endauth
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
