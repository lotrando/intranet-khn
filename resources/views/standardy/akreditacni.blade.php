@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/'.$categorie->category_icon) ?? '' }}" rel="shortcut icon">
@endsection

@section('searchbar')
<div class="col-sm-12 col-lg-12">
  <div class="input-icon">
    <span class="input-icon-addon">
      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <circle cx="10" cy="10" r="7"></circle>
        <line x1="21" y1="21" x2="15" y2="15"></line>
      </svg>
    </span>
    <input type="text" id="search" class="form-control" placeholder="{{ __('Hledat standard ...') }}">
  </div>
</div>
@endsection

@section('content')
<div class="page-wrapper mb-4">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center">

        <div class="col-12 mt-2">
          <div class="bg-transparent mb-2">
            <div class="row d-flex align-items-center">
              <div class="col-auto d-flex align-items-center pe-1 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-bs-toggle="tooltip" data-bs-placement="right"
                     data-bs-original-title="Standardů celkem">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <rect x="5" y="4" width="4" height="16" rx="1"></rect>
                  <rect x="9" y="4" width="4" height="16" rx="1"></rect>
                  <path d="M5 8h4"></path>
                  <path d="M9 16h4"></path>
                  <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
                  <path d="M14 9l4 -1"></path>
                  <path d="M16 16l3.923 -.98"></path>
                </svg>
                <h3 class="mb-0 d-md-inline d-xxl-inline">{{ $allDocuments->count() }}</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-arrow-left text-red ms-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-bs-toggle="tooltip" data-bs-placement="right"
                     data-bs-original-title="Příloh celkem">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                  <path d="M15 15h-6"></path>
                  <path d="M11.5 17.5l-2.5 -2.5l2.5 -2.5"></path>
                </svg>
                <h3 class="mb-0 d-md-inline d-xxl-inline">{{ $allAddons->count() }}</h3>
              </div>
              @foreach ($categories as $category)
              <div class="col-auto d-flex align-items-center justify-content-center pe-1 mb-2">
                <span class="text-uppercase mb-1">
                  <div class="text-uppercase">
                    {!! $category->svg_icon !!}
                  </div>
                </span>
                <a class="text-{{ $category->color }}" href="/standardy/{{ $category->folder_name . '/' .  $category->id }}" rel="noopener noreferrer">
                  <span class="d-md-inline d-xxl-inline ms-1">{{ $category->category_name }}</span>
                </a>
                <h3 class="mb-0 d-md-inline d-xxl-inline ms-2 text-{{ $category->color }}">{{ $category->documents->count() }}</h3>
              </div>
              @endforeach
            </div>
            <div class="progress progress-separated">
              @foreach ($categories as $category)
              <div class="progress-bar bg-{{ $category->color }}" role="progressbar" style="width: {{ (($category->documents->count() * 100) / ($allDocuments->count() + 1))  }}%" aria-label="{{ $category->category_name }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                   data-bs-original-title="{{ $category->category_name .' '. $category->documents->count() }}"></div>
              @endforeach
            </div>
          </div>
        </div>
        {{-- Searched events --}}
        <div>
          <div id="display" class="display mt-2 mb-2"></div>
        </div>

        <!-- Page pre-title -->
        <div class="col">
          <div class="page-pretitle text-primary">
            {{ __($pretitle) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($categorie->category_name) ?? '' }}
          </h2>
        </div>
        <!-- Page title actions buttons -->
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              <button class="btn btn-yellow me-2 d-none d-sm-inline-block" id="showbtn">
                <svg class="icon icon-tabler icon-tabler-list-details" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M13 5h8"></path>
                  <path d="M13 9h5"></path>
                  <path d="M13 15h8"></path>
                  <path d="M13 19h5"></path>
                  <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                  <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                </svg>
                {{ __('Zobrazit standardy') }}
              </button>
              <button class="btn btn-secondary me-2 d-none d-sm-inline-block" id="closebtn">
                <svg class="icon icon-tabler icon-tabler-menu-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="4" y1="6" x2="20" y2="6"></line>
                  <line x1="4" y1="12" x2="20" y2="12"></line>
                  <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
                {{ __('Skrýt standardy') }}
              </button>
              @auth
              <button class="btn btn-success me-2 d-none d-sm-inline-block" id="openCreateModal" data-bs-toggle="tooltip" data-bs-placement="bottom"
                      data-bs-original-title="{{ __('Vytvoří '. $categorie->button.' standard') }}">
                <svg class="icon icon-tabler icon-tabler-book-upload" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                  <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                  <path d="M15 16l3 -3l3 3"></path>
                  <path d="M18 13v9"></path>
                </svg>
                {{ __('Nový standard') }}
              </button>
              @endauth
            </div>
          </div>
        </div>
        <!-- Page Title Buttons End -->
        <div class="mb-1" id="display"></div>

        <div class="container-fluid">
          <div class="col-lg-12">
            <div class="accordion shadow-sm" id="accordion-standard">

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-1" aria-expanded="true">
                    01. Bezpečnostní cíle
                  </button>
                </h2>
                <div id="standard-1" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents1 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}.{{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">Příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>

                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-2" aria-expanded="true">
                    02. Dostupnost a kontinuita péče
                  </button>
                </h2>
                <div id="standard-2" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents2 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-3" aria-expanded="true">
                    03. Práva pacientů a jejich blízkých
                  </button>
                </h2>
                <div id="standard-3" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents3 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-4" aria-expanded="true">
                    04. Diagnostická péče
                  </button>
                </h2>
                <div id="standard-4" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents4 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ route('download', $document->id) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-5" aria-expanded="true">
                    05. Terapeutická péče
                  </button>
                </h2>
                <div id="standard-5" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents5 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-6" aria-expanded="true">
                    06. Anesteziologická a chirurgická péče
                  </button>
                </h2>
                <div id="standard-6" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents6 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-7" aria-expanded="true">
                    07. Skladování, předepisování a podávání léčiv
                  </button>
                </h2>
                <div id="standard-7" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents7 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-8" aria-expanded="true">
                    08. Edukace pacientů a jejich blízkých
                  </button>
                </h2>
                <div id="standard-8" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents8 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-9" aria-expanded="true">
                    09. Kvalita péče a bezpečí pacientů
                  </button>
                </h2>
                <div id="standard-9" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents9 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-10">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-10" aria-expanded="true">
                    10. Prevence a kontrola infekcí spojených se zdravotní péčí
                  </button>
                </h2>
                <div id="standard-10" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents10 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-11">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-11" aria-expanded="true">
                    11. Řízení a vedení
                  </button>
                </h2>
                <div id="standard-11" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents11 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-12">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-12" aria-expanded="true">
                    12. Zajištění bezpečnosti nemocničního prostředí
                  </button>
                </h2>
                <div id="standard-12" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-13">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-13" aria-expanded="true">
                    13. Kvalifikace a vzdělávání personálu
                  </button>
                </h2>
                <div id="standard-13" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-14">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-14" aria-expanded="true">
                    14. Řízení informací
                  </button>
                </h2>
                <div id="standard-14" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="main-heading-15">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-15" aria-expanded="true">
                    15. Přehled povinných školení pro zaměstnance KHN a.s.
                  </button>
                </h2>
                <div id="standard-15" class="accordion-collapse collapse m-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                    <div class="accordion-item">
                      <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable pt-1">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="/standardy/{{ $document->file }}" target="_blank">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $document->revision }}</span>
                                  @auth
                                  @if ($document->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                                @auth
                                <div class="col-auto">
                                  <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown" title="Možnosti">
                                    <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <line x1="4" y1="6" x2="20" y2="6"></line>
                                      <line x1="4" y1="12" x2="20" y2="12"></line>
                                      <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                  </span>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                    <li class="dropdown-item edit" id="{{ $document->id }}">
                                      <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                        <path d="M16 5l3 3" />
                                      </svg>
                                      {{ __('Upravit standard') }}
                                    </li>
                                    <li class="dropdown-item delete" id="{{ $document->id }}'">
                                      <svg class="icon icon dropdown-item-icon-delete" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7h16"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        <path d="M10 12l4 4m0 -4l-4 4"></path>
                                      </svg>
                                      {{ __('Odstranit standard') }}
                                    </li>
                                  </ul>
                                </div>
                                @endauth
                              </div>
                              @foreach ($document->addons as $add)
                              <div class="row align-items-center mb-1">
                                <div class="col-auto">
                                  <a href="{{ url('standardy/' . $add->file) }}">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/' . $add->file) }}">
                                    <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                  </a>
                                  <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                </div>
                                <div class="col-auto">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="3"></circle>
                                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                                    <line x1="6" y1="9" x2="18" y2="9"></line>
                                    <line x1="6" y1="12" x2="9" y2="12"></line>
                                    <line x1="6" y1="15" x2="8" y2="15"></line>
                                  </svg>
                                  <span class="text-muted">revize: {{ $add->revision }}</span>
                                  @auth
                                  @if ($add->status == 'Rozpracováno')
                                  <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                  @else
                                  <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                  @endif
                                  @endauth
                                  @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                  <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                  @endif
                                  @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                  <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                  @endif
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                </div>
                              </div>
                              @endforeach
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
        </div>
      </div>
      @endsection

      @section('modals')
      {{-- Main Form Modal --}}
      <div class="modal modal-blur fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-full-width mx-5 modal-dialog-centered" role="document">
          <div class="modal-content shadow-lg">
            <div id="modal-header">
              <h5 class="modal-title"></h5>
              <i id="modal-icon"></i>
            </div>
            <form id="inputForm" action="{{ route('documents.create') }}">
              @csrf
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <span id="form_result_modal"></span>
                  </div>
                </div>
                <div class="row">
                  <input class="form-control" id="category_id" name="category_id" type="hidden">
                  {{-- <div class="col-12 col-lg-3 mb-sm-1"> --}}
                    {{-- <label class="form-label">{{ __('Kategorie standardu') }}</label> --}}
                    {{-- <input class="form-control" id="category_id" name="category_id" type="text" placeholder="{{ __('Celý název standardu') }}"> --}}
                    {{-- <select class="form-select" id="category_id" name="category_id"> --}}
                      {{-- @foreach ($categories as $item) --}}
                      {{-- <option value="{{ $item->id }}" @if (old('category_id')==$item->id) selected @endif> --}}
                        {{-- {{ $item->category_name }}</option> --}}
                      {{-- @endforeach --}}
                      {{-- </select> --}}
                    {{-- </div> --}}
                  <div class="col-2 col-lg-2 mb-sm-1">
                    <label class="form-label">{{ __('Position') }} č:</label>
                    <input class="form-control" id="position" name="position" type="text" }">
                  </div>
                  <div class="col-10 col-lg-8 mb-sm-1">
                    <label class="form-label">{{ __('Name') }}</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="{{ __('Celý název standardu') }}">
                  </div>
                  <div class="col-12 col-lg-2 mb-sm-1">
                    <label class="form-label">{{ __('Revision') }}</label>
                    <input class="form-control" id="revision" name="revision" type="text" placeholder="{{ __('číslo nebo měsíc a rok') }}">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-10 mb-sm-1">
                    <label class="form-label">{{ __('Jednoduchý popis standardu') }}</label>
                    <input class="form-control" id="description" name="description" type="text" placeholder="{{ __('Jednoduchý popis standardu') }}">
                  </div>
                  <div class="col-12 col-lg-2 mb-sm-1">
                    <label class="form-label">{{ __('Unikátní kód') }}</label>
                    <input class="form-control" id="unique_code" name="unique_code" type="text" placeholder="{{ __('Unikátní kód') }}">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-9 mb-sm-1">
                    <label class="form-label">{{ __('Soubor') }}</label>
                    <input class="form-control" id="file" name="file" type="file" placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                  </div>
                  <div class="col-12 col-lg-3 mb-sm-1">
                    <label class="form-label">{{ __('Status') }}</label>
                    <select class="form-select" id="status" name="status">
                      <option value="Rozpracováno">Rozpracováno</option>
                      <option value="Schváleno">Schváleno</option>
                    </select>
                  </div>
                </div>
              </div>
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
              <input id="hidden_file" name="hidden_file" type="hidden" />
              <input id="folder_name" name="folder_name" type="hidden" />

              <div class="modal-footer">
                <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
                  {{ __('Close') }}
                </button>
                <button class="btn btn-primary ms-auto hover-shadow" id="action_button" name="action_button" type="submit"></button>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Delete Modal --}}
      <div class="modal modal-blur fade" id="confirmModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content shadow-lg">
            {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
            <div class="modal-status bg-danger"></div>
            <div class="modal-body py-4 text-center">
              <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                   stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 9v2m0 4v.01" />
                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
              </svg>
              <h3>{{ __('Are you sure?') }}</h3>
              <div class="text-muted mb-2">
                {{ __('Do you really want to remove standard event?') }}<br>{{ __('This operation cannot be undone') }}
              </div>
              <div class="text-info">{{ __('If the standard contains appendices, it will be possible to subsequently attach these appendices to a new or different standard') }}
              </div>
            </div>
            <div class="modal-footer">
              <div class="w-100">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-muted w-100 hover-shadow" data-bs-dismiss="modal">
                      {{ __('Cancel') }}
                    </button>
                  </div>
                  <div class="col">
                    <button class="btn btn-danger w-100 hover-shadow" id="ok_button"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection

      @section('scripts')
      <script>
        function fill(Value) {
            $('#search').val(Value);
            $('#display').hide();
          }
          $(document).ready(function() {
            $("#search").keyup(function() {
              var name = $('#search').val();
              if (name == "") {
                $("#display").html("");
              } else {
                $.ajax({
                  type: "GET",
                  url: "{{ route('standardy.standard.search') }}",
                  data: {
                    search: name
                  },
                  success: function(html) {
                    $("#display").html(html).show();
                  }
                });
              }
            });
          });
      </script>

      <script>
        $(document).ready(function() {
              $('.accordion-collapse').removeClass('show');
              $('#showbtn').click(function() {
                $('.accordion-collapse').addClass('show');
                $('.accordion-button').removeClass('collapsed');
              });

              $('#closebtn').click(function() {
                $('.accordion-collapse').removeClass('show');
                $('.accordion-button').addClass('collapsed');
              });
            });

    // Form Modal Functions
    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#unique_code').prop('readonly', true);
      $('#form_result_modal, #form_result_window').html('');
      $.ajax({
        url: "/documents/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#inputForm')[0].reset();
          $("#modal-icon, #modal-header").removeClass();
          $('.modal-title').val('');
          $('#formModal').modal('show');
          $('#modal-icon').addClass('fas fa-{{ $categorie->fas_icon }} fa-2x m-2');
          $('#modal-header').addClass("modal-header bg-{{ $categorie->color }}-lt");
          $('#action_button, .modal-title').text("{{ __('Edit') }} {{ $categorie->button }} standard");
          $('#action').val("Edit");
          $('#category_id').val(html.data.category_id);
          $('#folder_name').val(html.data.category.folder_name);
          $('#name').val(html.data.name);
          $('#revision').val(html.data.revision);
          $('#unique_code').val(html.data.unique_code);
          $('#description').val(html.data.description);
          $('#position').val(html.data.position);
          $('#attachment').val(html.data.attachment);
          $('#status').val(html.data.status);
          $('#hidden_id').val(html.data.id);
          $('#hidden_file').val(html.data.file);
        }
      })
    })

    $('#openCreateModal').click(function() {
      $('#inputForm')[0].reset();
      $("#modal-icon, #modal-header").removeClass();
      $('#category_id').val('{{ $categorie->id }}');
      $('#formModal').modal('show');
      $('#modal-icon').addClass('fas fa-{{ $categorie->fas_icon }} fa-2x m-2');
      $('#modal-header').addClass("modal-header bg-{{ $categorie->color }}-lt");
      $('#action_button, .modal-title').text("{{ __('Create new') }} {{ $categorie->button }} standard");
      $('#unique_code').prop('readonly', false);
      $('#action').val("Add");
      $('#folder_name').val("{{ $categorie->folder_name }}");
      $('#status').val('Schváleno');
    })

    $('#inputForm').on('submit', function(event) {
      event.preventDefault();
      if ($('#action').val() === 'Add') {
        $.ajax({
          url: "{{ route('documents.store') }}",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul> ';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html += '</ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' + data.success + '</li></ul></div>';
              $('#formModal').modal('hide')
              $('#inputForm')[0].reset();
              location.reload()
              $('#form_result_window').html(html);
            }
          }
        })
      }

      if ($('#action').val() === "Edit") {
        event.preventDefault();
        $.ajax({
          url: "{{ route('documents.update') }}",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul>';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html += '</ul></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' +
                data.success + '</li></ul></div>';
              $('#form_result_window').html(html);
              location.reload();
              $('#formModal').modal('hide');
            }
          }
        });
      }
    })

    // Delete Employee
    $(document).on('click', '.delete', function() {
      id = $(this).attr('id');
      $('#ok_button').text("{{ __('Delete') }}");
      $('#confirmModal').modal('show');
    })

    // Delete Confirm
    $('#ok_button').click(function() {
      $.ajax({
        url: "/documents/destroy/" + id,
        beforeSend: function() {
          $('#ok_button').text("{{ __('Deleting ...') }}");
        },
        success: function(data) {
          setTimeout(function() {
            $('#confirmModal').modal('hide');
            $('#ok_button').text("{{ __('Delete') }}");
            location.reload();
          }, 1000);
        }
      })
    })
      </script>
      @endsection
