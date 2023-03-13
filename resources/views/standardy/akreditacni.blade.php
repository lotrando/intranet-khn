@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="{{ asset('img/' . $categorie->category_icon) ?? '' }}" rel="shortcut icon">
@endsection

@section('searchbar')
  <div class="col-12 me-2">
    <input class="form-control d-lg-block d-xl-inline" id="search" type="text"
      placeholder="{{ __('Hledat dokument ...') }}">
  </div>
@endsection

@section('content')
  {{-- Page Wrapper Start --}}
  <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-fluid">
        <div class="row align-items-center">
          @foreach ($stands as $category)
            <div class="col-2 col-sm-2 col-md-2 col-xl-2 col-xxl-2 ps-0 m-0">
              <a class="btn bg-{{ $category->color }}-lt hover-shadow-sm w-100 m-1" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-original-title="{{ __('' . $category->category_name . ' standardy') }}"
                href="/standardy/{{ $category->folder_name . '/' . $category->id }}">
                <span class="d-inline d-sm-inline d-md-none d-lg-inline d-xl-inline">{!! $category->svg_icon !!}</span>
                <span class="d-none d-md-inline d-lg-inline d-xl-inline pe-1">{{ $category->category_name }}</span>
                <span class="text-small">
                  {{ $category->documents->count() }}
                </span>
              </a>
            </div>
          @endforeach
          <div class="col-12">

            <div class="progress mt-2">
              @foreach ($stands as $category)
                <div class="progress-bar progress-sm bg-{{ $category->color }}-lt" data-bs-toggle="tooltip"
                  data-bs-placement="bottom"
                  data-bs-original-title="{{ $category->category_name . ' standardy ' . round(($category->documents->count() * 100) / $allDocuments->count()) . '%' }}"
                  role="progressbar" aria-label="{{ $category->category_name }}"
                  style="width: {{ ($category->documents->count() * 100) / $allDocuments->count() }}%"></div>
              @endforeach
            </div>

          </div>

          {{-- Searched events --}}
          <div>
            <div class="display mt-2 mb-2" id="display"></div>
          </div>

          {{-- Page title --}}
          <div class="col">
            {{-- Page Pretitle --}}
            <div class="page-pretitle text-primary">
              {{ __($pretitle) ?? '' }}
            </div>
            {{-- Page Title --}}
            <h2 class="page-title text-primary">
              {{ __($categorie->category_name) ?? '' }}
            </h2>
          </div>

          <!-- Page title actions buttons -->
          <div class="ms-auto d-print-none col-auto">
            <div class="btn-list">
              <div class="d-flex justify-content-end">
                @auth
                  <button class="btn btn-success d-none d-sm-inline-block me-1" id="openCreateModal"
                    data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="{{ __('Vytvoří nový ' . $categorie->button . ' standard') }}">
                    <svg class="icon icon-tabler icon-tabler-book-upload m-0" xmlns="http://www.w3.org/2000/svg"
                      width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                      <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                      <path d="M15 16l3 -3l3 3"></path>
                      <path d="M18 13v9"></path>
                    </svg>
                    <span class="d-sm-none d-md-none d-lg-inline ms-1">{{ __('Nový') }}</span>
                  </button>
                @endauth
                <button class="btn btn-yellow me-1 d-none d-sm-inline-block" id="showbtn">
                  <svg class="icon icon-tabler icon-tabler-list-details m-0" data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-original-title="{{ __('Zobrazí všechny ' . $categorie->button . ' standardy') }}"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13 5h8"></path>
                    <path d="M13 9h5"></path>
                    <path d="M13 15h8"></path>
                    <path d="M13 19h5"></path>
                    <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                  </svg>
                  <span class="d-sm-none d-md-none d-lg-inline ms-1">{{ __('Zobrazit') }}</span>
                </button>
                <button class="btn btn-secondary d-none d-sm-inline-block" id="closebtn">
                  <svg class="icon icon-tabler icon-tabler-menu-2 m-0" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="{{ __('Skryje všechny ' . $categorie->button . ' standardy') }}"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                  </svg>
                  <span class="d-sm-none d-md-none d-lg-inline ms-1">{{ __('Skrýt') }}</span>
                </button>
              </div>
            </div>
          </div>
          <!-- Page Title Buttons End -->

          <div class="col-12 mt-1">
            <div class="accordion shadow-sm" id="accordion-standard">

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-1">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-1"
                    type="button" aria-expanded="true">
                    1. Bezpečnostní cíle
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-1" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents1 as $document)
                      <div class="accordion-item bg-white">
                        <div id="test-{{ $document->position }}">
                          <div class="accordion-body p-1">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item border-0 p-0">
                                <div class="row align-items-center g-3 mx-2">
                                  <div class="avatar bg-{{ $document->category->color }}-lt col-auto"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-original-title="ID #{{ $document->id }}">
                                    <div class="text-uppercase">
                                      {!! $document->category->svg_icon !!}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <span class="avatar bg-{{ $document->category->color }}-lt"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Stáhnout standard">
                                        <img src="{{ asset('img/files/pdf.png') }}" height="32px" alt="PDF soubor">
                                      </span>
                                    </a>
                                  </div>
                                  <div id="{{ $document->id }}" class="col text-truncate">
                                    <span>
                                      <p id="{{ $document->id }}"
                                        class="show strong d-inline text-primary text-decoration-none cursor-pointer"
                                        style="margin-bottom: 0;" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Více informací o standardu">
                                        {{ $document->accordion_group }}.{{ $document->position }}.
                                        {{ $document->name }}</p>
                                    </span>
                                    <div class="d-block description text-muted text-truncate">
                                      {{ $document->description }}</div>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer" data-bs-toggle="dropdown">
                                        <svg class="icon dropdown-item-icon" width="24" height="24"
                                          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
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
                                  <div class="row align-items-center g-3 mx-2">
                                    <div class="avatar bg-{{ $document->category->color }}-lt col-auto">
                                      <div class="text-uppercase" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="ID #{{ $document->id }}#{{ $add->id }}">
                                        <svg
                                          class="icon icon-tabler icon-tabler-plus text-{{ $document->category->color }}"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="12" y1="5" x2="12" y2="19"></line>
                                          <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar bg-{{ $document->category->color }}-lt"
                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                          data-bs-original-title="Stáhnout přílohu">
                                          <img src="{{ asset('img/files/pdf-add.png') }}" height="32px"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">
                                          {{ $document->accordion_group }}.{{ $document->position }}.
                                          {{ $document->name }} - příloha č.{{ $add->addon_number }}</h3>
                                      </a>
                                      <div class="d-block description text-muted text-truncate mt-n1">
                                        {{ $document->name }} - {{ $add->description }}</div>
                                    </div>
                                    <div class="col-auto">
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno
                                          !</span>
                                      @endif
                                      <span
                                        class="text-muted description">{{ Carbon\Carbon::parse($add->updated_at)->diffForHumans() }}</span>
                                      <svg class="icon icon-tabler icon-tabler-certificate-2 text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="15" r="3"></circle>
                                        <path d="M10 7h4"></path>
                                        <path d="M10 18v4l2 -1l2 1v-4"></path>
                                        <path
                                          d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2">
                                        </path>
                                      </svg>
                                      <span class="text-muted description">Revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                              <div class="list-group-item py-1 px-2">
                                <div class="row d-flex justify-content-between">
                                  <div class="col-auto">
                                    @if (Carbon\Carbon::parse($document->created_at)->addDays(1) >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(7) >= Carbon\Carbon::now())
                                      <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno
                                        !</span>
                                    @endif
                                    <span
                                      class="text-muted description">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                    <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24"
                                      height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted description">Revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                  </div>
                                  @auth
                                    <div class="d-xs-none d-sm-none d-lg-inline col-auto">
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-lime" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                          </path>
                                          <rect x="9" y="3" width="6" height="4"
                                            rx="2"></rect>
                                          <path d="M9 12v-1h6v1"></path>
                                          <path d="M12 11v6"></path>
                                          <path d="M11 17h2"></path>
                                        </svg>
                                        Zpracoval: {{ $document->processed }}
                                      </span>
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                          <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path>
                                          <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                          <line x1="18.5" y1="19.5" x2="21" y2="22"></line>
                                        </svg>
                                        Přezkoumal: {{ $document->examine }}
                                      </span>
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-2">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-2"
                    type="button" aria-expanded="true">
                    02. Dostupnost a kontinuita péče
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-2" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents2 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
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
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                          - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-3">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-3"
                    type="button" aria-expanded="true">
                    03. Práva pacientů a jejich blízkých
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-3" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents3 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standardy.download', $document->id) }}" target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
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
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                          - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-4">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-4"
                    type="button" aria-expanded="true">
                    04. Diagnostická péče
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-4" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents4 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}" target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.download', $document->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-5">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-5"
                    type="button" aria-expanded="true">
                    05. Terapeutická péče
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-5" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents5 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-6">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-6"
                    type="button" aria-expanded="true">
                    06. Anesteziologická a chirurgická péče
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-6" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents6 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-7">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-7"
                    type="button" aria-expanded="true">
                    7. Skladování, předepisování a podávání léčiv
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-7" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents7 as $document)
                      <div class="accordion-item bg-white">
                        <div id="test-{{ $document->position }}">
                          <div class="accordion-body p-1">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item border-0 p-0">
                                <div class="row align-items-center g-3 mx-2">
                                  <div class="avatar bg-{{ $document->category->color }}-lt col-auto"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-original-title="ID #{{ $document->id }}">
                                    <div class="text-uppercase">
                                      {!! $document->category->svg_icon !!}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar bg-{{ $document->category->color }}-lt"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Stáhnout standard">
                                        <img src="{{ asset('img/files/pdf.png') }}" height="32px"
                                          alt="PDF soubor">
                                      </span>
                                    </a>
                                  </div>
                                  <div id="{{ $document->id }}" class="col text-truncate">
                                    <span>
                                      <p id="{{ $document->id }}"
                                        class="show strong d-inline text-primary text-decoration-none cursor-pointer"
                                        style="margin-bottom: 0;" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Více informací o standardu">
                                        {{ $document->accordion_group }}.{{ $document->position }}.
                                        {{ $document->name }}</p>
                                    </span>
                                    <div class="d-block description text-muted text-truncate">
                                      {{ $document->description }}</div>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer" data-bs-toggle="dropdown">
                                        <svg class="icon dropdown-item-icon" width="24" height="24"
                                          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                          stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                  <div class="row align-items-center g-3 mx-2">
                                    <div class="avatar bg-{{ $document->category->color }}-lt col-auto">
                                      <div class="text-uppercase" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="ID #{{ $document->id }}#{{ $add->id }}">
                                        <svg
                                          class="icon icon-tabler icon-tabler-plus text-{{ $document->category->color }}"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="12" y1="5" x2="12" y2="19">
                                          </line>
                                          <line x1="5" y1="12" x2="19" y2="12">
                                          </line>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar bg-{{ $document->category->color }}-lt"
                                          data-bs-toggle="tooltip" data-bs-placement="top"
                                          data-bs-original-title="Stáhnout přílohu">
                                          <img src="{{ asset('img/files/pdf-add.png') }}" height="32px"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">
                                          {{ $document->accordion_group }}.{{ $document->position }}.
                                          {{ $document->description }} - příloha č.{{ $add->addon_number }}</h3>
                                      </a>
                                      <div class="d-block description text-muted text-truncate mt-n1">
                                        {{ $add->description }}</div>
                                    </div>
                                    <div class="col-auto">
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno
                                          !</span>
                                      @endif
                                      <span
                                        class="text-muted description">{{ Carbon\Carbon::parse($add->updated_at)->diffForHumans() }}</span>
                                      <svg class="icon icon-tabler icon-tabler-certificate-2 text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="15" r="3"></circle>
                                        <path d="M10 7h4"></path>
                                        <path d="M10 18v4l2 -1l2 1v-4"></path>
                                        <path
                                          d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2">
                                        </path>
                                      </svg>
                                      <span class="text-muted description">Revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                              <div class="list-group-item py-1 px-2">
                                <div class="row d-flex justify-content-between">
                                  <div class="col-auto">
                                    @if (Carbon\Carbon::parse($document->created_at)->addDays(1) >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(7) >= Carbon\Carbon::now())
                                      <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno
                                        !</span>
                                    @endif
                                    <span
                                      class="text-muted description">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                    <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24"
                                      height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted description">Revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                  </div>
                                  @auth
                                    <div class="d-xs-none d-sm-none d-lg-inline col-auto">
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-lime" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                          </path>
                                          <rect x="9" y="3" width="6" height="4"
                                            rx="2"></rect>
                                          <path d="M9 12v-1h6v1"></path>
                                          <path d="M12 11v6"></path>
                                          <path d="M11 17h2"></path>
                                        </svg>
                                        Zpracoval: {{ $document->processed }}
                                      </span>
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                          <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path>
                                          <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                          <line x1="18.5" y1="19.5" x2="21" y2="22"></line>
                                        </svg>
                                        Přezkoumal: {{ $document->examine }}
                                      </span>
                                      <span class="text-muted description">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-8">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-8"
                    type="button" aria-expanded="true">
                    08. Edukace pacientů a jejich blízkých
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-8" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents8 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-9">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-9"
                    type="button" aria-expanded="true">
                    09. Kvalita péče a bezpečí pacientů
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-9" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents9 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-10">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-10"
                    type="button" aria-expanded="true">
                    10. Prevence a kontrola infekcí spojených se zdravotní péčí
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-10" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents10 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-11">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-11"
                    type="button" aria-expanded="true">
                    11. Řízení a vedení
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-11" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents11 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-12">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-12"
                    type="button" aria-expanded="true">
                    12. Zajištění bezpečnosti nemocničního prostředí
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-12" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-13">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-13"
                    type="button" aria-expanded="true">
                    13. Kvalifikace a vzdělávání personálu
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-13" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-14">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-14"
                    type="button" aria-expanded="true">
                    14. Řízení informací
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-14" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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

              <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="main-heading-15">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#standard-15"
                    type="button" aria-expanded="true">
                    15. Přehled povinných školení pro zaměstnance KHN a.s.
                  </button>
                </h2>
                <div class="accordion-collapse collapse m-1" id="standard-15" data-bs-parent="#accordion-standard">
                  <div class="accordion" id="accordion-example">
                    @foreach ($documents12 as $document)
                      <div class="accordion-item bg-white">
                        <div class="show" id="collapse-{{ $document->position }}"
                          data-bs-parent="#accordion-standard" style="">
                          <div class="accordion-body pt-0">
                            <div class="list-group list-group-flush list-group-hoverable pt-1">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                    <a href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-primary d-block text-decoration-none"
                                      href="{{ route('soubory.standard.download', $document->id) }}"
                                      target="_blank">
                                      <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}
                                      </h3>
                                    </a>
                                    <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}
                                    </div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <circle cx="15" cy="15" r="3"></circle>
                                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                      <path
                                        d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                      </path>
                                      <line x1="6" y1="9" x2="18" y2="9"></line>
                                      <line x1="6" y1="12" x2="9" y2="12"></line>
                                      <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                    <span class="text-muted">revize: {{ $document->revision }}</span>
                                    @auth
                                      @if ($document->status == 'Rozpracováno')
                                        <span
                                          class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                      @else
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                      @endif
                                    @endauth
                                    @if (Carbon\Carbon::parse($document->created_at)->addDay() >= Carbon\Carbon::today())
                                      <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                    @endif
                                    @if (Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                      <span
                                        class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                    @endif
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                      stroke="currentColor" fill="none" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16"
                                        rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span
                                      class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                                  </div>
                                  @auth
                                    <div class="col-auto">
                                      <span class="btn btn-icon hover-shadow cursor-pointer"
                                        id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                        title="Možnosti">
                                        <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <line x1="4" y1="6" x2="20" y2="6"></line>
                                          <line x1="4" y1="12" x2="20" y2="12"></line>
                                          <line x1="4" y1="18" x2="20" y2="18"></line>
                                        </svg>
                                      </span>
                                      <ul class="dropdown-menu"
                                        aria-labelledby="dropdownMenuButton-' . $document->id . '">
                                        <li class="dropdown-item edit" id="{{ $document->id }}">
                                          <svg class="icon dropdown-item-icon-edit" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                              d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                          </svg>
                                          {{ __('Upravit standard') }}
                                        </li>
                                        <li class="dropdown-item delete" id="{{ $document->id }}'">
                                          <svg class="icon icon dropdown-item-icon-delete"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                      <a href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf-add.png') }}"
                                            alt="PDF - Příloha standardu">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-primary d-block d-block text-primary text-decoration-none"
                                        href="{{ route('soubory.standard.addon.download', $add->id) }}">
                                        <h3 style="margin-bottom: 0;">{{ $document->position }}.
                                          {{ $document->name }} - příloha č. {{ $add->name }}</h3>
                                      </a>
                                      <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler icon-tabler-certificate text-yellow"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                          d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                      </svg>
                                      <span class="text-muted">revize: {{ $add->revision }}</span>
                                      @auth
                                        @if ($add->status == 'Rozpracováno')
                                          <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                                        @else
                                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                                        @endif
                                      @endauth
                                      @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                                        <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový</span>
                                      @endif
                                      @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                                        <span
                                          class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno</span>
                                      @endif
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                          rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span
                                        class="text-muted">{{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
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
    </div>
  </div>
  {{-- End Page wrapper --}}
@endsection

@section('modals')
  {{-- Main Form Modal --}}
  <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-full-width mx-3" role="document">
      <div class="modal-content shadow-lg">
        <div id="modal-header">
          <h5 class="modal-title"></h5>
          <div class="avatar avatar-transparent" id="modal-icon"></div>
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
              <div class="col-2 col-lg-1 mb-sm-1">
                <label class="form-label">{{ __('Position') }} č:</label>
                <input class="form-control" id="position" name="position" type="text">
              </div>
              <div class="col-2 col-lg-1 mb-sm-1">
                <label class="form-label">{{ __('Skupina') }} č:</label>
                <input class="form-control" id="accordion_group" name="accordion_group" type="text">
              </div>
              <div class="col-8 col-lg-4 mb-sm-1">
                <label class="form-label">{{ __('Name') }} <small class="text-azure">usnadní
                    vyhledávání</small></label>
                <input class="form-control" id="name" name="name" type="text"
                  placeholder="{{ __('Kategorický název standardu') }}">
              </div>
              <div class="col-4 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Revision') }}</label>
                <input class="form-control" id="revision" name="revision" type="text"
                  placeholder="{{ __('Číslo nebo datum') }}">
              </div>
              <div class="col-4 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Datum revize') }}</label>
                <input class="form-control" id="revision_date" name="revision_date" type="date"
                  placeholder="{{ __('Revision Date') }}">
              </div>
              <div class="col-4 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Datum další revize') }}</label>
                <input class="form-control" id="next_revision_date" name="next_revision_date" type="date"
                  placeholder="{{ __('Next revision Date') }}">
              </div>
            </div>
            <div class="row">
              <div class="col-9 col-lg-10 mb-sm-1">
                <label class="form-label">{{ __('Popis standardu') }} <small class="text-azure">usnadní
                    vyhledávání</small></label>
                <input class="form-control" id="description" name="description" type="text"
                  placeholder="{{ __('Konkrétní popis standardu') }}">
              </div>
              <div class="col-3 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Unikátní kód') }}</label>
                <input class="form-control" id="unique_code" name="unique_code" type="text"
                  placeholder="{{ __('Značka #') }}">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-4 mb-sm-1">
                <label class="form-label">{{ __('Zpracoval/a') }}</label>
                <select class="form-select" id="processed" name="processed">
                  @foreach ($doctors as $doctor)
                    <option
                      value="{{ $doctor->title_preffix }} {{ $doctor->last_name }} {{ $doctor->first_name }}">
                      {{ $doctor->last_name }} {{ $doctor->first_name }}, {{ $doctor->title_preffix }}</option>
                  @endforeach
                  <option value="Rada kvality">Rada kvality</option>
                  <option value="Sekaninova Anna">Sekaninova Anna</option>
                  <option value="Mlýnková Ruth">Mlýnková Ruth, Mgr.</option>
                  <option value="Bogocz Danuta">Bogocz Danut, Mgr.</option>
                  <option value="Vajglová Pavlína, Mgr.">Vajglová Pavlína, Mgr.</option>
                </select>
              </div>
              <div class="col-12 col-lg-4 mb-sm-1">
                <label class="form-label">{{ __('Schválil/a') }}</label>
                <select class="form-select" id="authorize" name="authorize">
                  @foreach ($doctors as $doctor)
                    <option
                      value="{{ $doctor->title_preffix }} {{ $doctor->last_name }} {{ $doctor->first_name }}">
                      {{ $doctor->last_name }} {{ $doctor->first_name }}, {{ $doctor->title_preffix }}</option>
                  @endforeach
                  <option value="Rada kvality">Rada kvality</option>
                  <option value="Sekaninova Anna">Sekaninova Anna</option>
                  <option value="Mlýnková Ruth">Mlýnková Ruth, Mgr.</option>
                  <option value="Bogocz Danuta">Bogocz Danut, Mgr.</option>
                  <option value="Vajglová Pavlína, Mgr.">Vajglová Pavlína, Mgr.</option>
                </select>
              </div>
              <div class="col-12 col-lg-4 mb-sm-1">
                <label class="form-label">{{ __('Kontrolu provedl/a') }}</label>
                <select class="form-select" id="examine" name="examine">
                  @foreach ($doctors as $doctor)
                    <option
                      value="{{ $doctor->title_preffix }} {{ $doctor->last_name }} {{ $doctor->first_name }}">
                      {{ $doctor->last_name }} {{ $doctor->first_name }}, {{ $doctor->title_preffix }}</option>
                  @endforeach
                  <option value="Rada kvality">Rada kvality</option>
                  <option value="Sekaninova Anna">Sekaninova Anna</option>
                  <option value="Mlýnková Ruth">Mlýnková Ruth, Mgr.</option>
                  <option value="Bogocz Danuta">Bogocz Danut, Mgr.</option>
                  <option value="Vajglová Pavlína, Mgr.">Vajglová Pavlína, Mgr.</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-10 mb-sm-1">
                <label class="form-label">{{ __('Oblast působnosti standardu') }} <small class="text-azure">usnadní
                    vyhledávání</small></label>
                <input class="form-control" id="tags" name="tags" type="text"
                  placeholder="{{ __('Zkratky oddělení nebo ambulancí, oddělené čárkou (INT-ODD,...)') }}">
              </div>
              <div class="col-12 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Platnost standardu od') }}</label>
                <input class="form-control" id="efficiency" name="efficiency" type="date"
                  placeholder="{{ __('Datum platnosti') }}">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-7 mb-sm-1">
                <label class="form-label">{{ __('Soubor') }}</label>
                <input class="form-control" id="file" name="file" type="file"
                  placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
              </div>
              <div class="col-6 col-lg-2 mb-sm-1">
                <label class="form-label">{{ __('Status') }}</label>
                <select class="form-select" id="status" name="status">
                  <option value="Rozpracováno">Rozpracováno</option>
                  <option value="Schváleno">Schváleno</option>
                </select>
              </div>
              <div class="col-6 col-lg-3 mb-sm-1">
                <label class="form-label">{{ __('Založil / upravil') }}</label>
                <input class="form-control" id="user_name" name="user_name" type="text" readonly>
              </div>
            </div>
            <div class="row" id="attachments">

              <div class="row">
                <div class="hr-text text-muted my-3">
                  <span style="font-size: 0.6rem">{{ __('Attachment') }} 1</span>
                </div>

                <div class="col-12 col-lg-8 mb-sm-1">
                  <label class="form-label">{{ __('Příloha') }} 1</label>
                  <input class="form-control" id="file-add" name="file-add[]" type="file"
                    placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="revision-add" name="revision-add[]" type="text"
                    placeholder="{{ __('Číslo nebo datum') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Status') }}</label>
                  <select class="form-select" id="status1" name="status1">
                    <option value="Schváleno">Schváleno</option>
                    <option value="Rozpracováno">Rozpracováno</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="hr-text text-muted my-3">
                  <span style="font-size: 0.6rem">{{ __('Attachment') }} 2</span>
                </div>
                <div class="col-12 col-lg-8 mb-sm-1">
                  <label class="form-label">{{ __('Příloha') }} 2</label>
                  <input class="form-control" id="file-add" name="file-add[]" type="file"
                    placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="revision-add" name="revision-add[]" type="text"
                    placeholder="{{ __('Číslo nebo datum') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Status') }}</label>
                  <select class="form-select" id="status2" name="status2">
                    <option value="Schváleno">Schváleno</option>
                    <option value="Rozpracováno">Rozpracováno</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="hr-text text-muted my-3">
                  <span style="font-size: 0.6rem">{{ __('Attachment') }} 3</span>
                </div>
                <div class="col-12 col-lg-8 mb-sm-1">
                  <label class="form-label">{{ __('Příloha') }} 3</label>
                  <input class="form-control" id="file-add" name="file-add[]" type="file"
                    placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="revision-add" name="revision-add[]" type="text"
                    placeholder="{{ __('Číslo nebo datum') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Status') }}</label>
                  <select class="form-select" id="status3" name="status3">
                    <option value="Schváleno">Schváleno</option>
                    <option value="Rozpracováno">Rozpracováno</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="hr-text text-muted my-3">
                  <span style="font-size: 0.6rem">{{ __('Attachment') }} 4</span>
                </div>
                <div class="col-12 col-lg-8 mb-sm-1">
                  <label class="form-label">{{ __('Příloha') }} 4</label>
                  <input class="form-control" id="file-add" name="file-add[]" type="file"
                    placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="revision-add" name="revision-add[]" type="text"
                    placeholder="{{ __('Číslo nebo datum') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Status') }}</label>
                  <select class="form-select" id="status4" name="status4">
                    <option value="Schváleno">Schváleno</option>
                    <option value="Rozpracováno">Rozpracováno</option>
                  </select>
                </div>
              </div>

            </div>

          </div>
          <input id="action" name="action" type="hidden" />
          <input id="hidden_id" name="hidden_id" type="hidden" />
          <input id="hidden_file" name="hidden_file" type="hidden" />
          <input id="folder_name" name="folder_name" type="hidden" />
          <input id="user_id" name="user_id" type="hidden" />

          <div class="modal-footer">
            <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
              <svg class="icon icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                <path d="M10 10l4 4m0 -4l-4 4"></path>
              </svg>
              {{ __('Close') }}
            </button>
            <button class="btn btn-primary ms-auto hover-shadow" id="addon-btn" type="button">
              <svg class="icon icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5">
                </path>
              </svg>
              {{ __('Attachments') }}</button>
            <div class="align-content-end flex">
              <button class="btn btn-primary ms-auto hover-shadow" id="action_button" name="action_button"
                type="submit">
                <svg class="icon icon-tabler icon-tabler-book-upload" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                  <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                  <path d="M15 16l3 -3l3 3"></path>
                  <path d="M18 13v9"></path>
                </svg>
                Upravit standard
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Show Modal --}}
  <div class="modal fade" id="showModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-full-width mx-3" role="document">
      <div class="modal-content shadow-lg">
        <div id="show-modal-header">
          <h5 class="modal-title"></h5>
          <div class="avatar avatar-transparent" id="show-modal-icon"></div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-2 col-lg-1 mb-sm-1">
              <label class="form-label">{{ __('Position') }} č:</label>
              <input class="form-control" id="show-position" type="text" readonly>
            </div>
            <div class="col-2 col-lg-1 mb-sm-1">
              <label class="form-label">{{ __('Skupina') }} č:</label>
              <input class="form-control" id="accordion_group" name="accordion_group" type="text">
            </div>
            <div class="col-8 col-lg-4 mb-sm-1">
              <label class="form-label">{{ __('Name') }} standardu</label>
              <input class="form-control" id="show-name" type="text" readonly>
            </div>
            <div class="col-4 col-lg-2 mb-sm-1">
              <label class="form-label">{{ __('Revision') }}</label>
              <input class="form-control" id="show-revision" type="text" readonly>
            </div>
            <div class="col-4 col-lg-2 mb-sm-1">
              <label class="form-label">{{ __('Datum revize') }}</label>
              <input class="form-control" id="show-revision_date" type="date" readonly>
            </div>
            <div class="col-4 col-lg-2 mb-sm-1">
              <label class="form-label">{{ __('Datum další revize') }}</label>
              <input class="form-control" id="show-next_revision_date" type="date" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-12 mb-sm-1">
              <label class="form-label">{{ __('Popis standardu') }} </label>
              <input class="form-control" id="show-description" type="text" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-4 mb-sm-1">
              <label class="form-label">{{ __('Zpracoval/a') }}</label>
              <input class="form-control" id="show-processed" type="text" readonly>
            </div>
            <div class="col-12 col-lg-4 mb-sm-1">
              <label class="form-label">{{ __('Schválil/a') }}</label>
              <input class="form-control" id="show-authorize" type="text" readonly>
            </div>
            <div class="col-12 col-lg-4 mb-sm-1">
              <label class="form-label">{{ __('Kontrolu provedl/a') }}</label>
              <input class="form-control" id="show-examine" type="text" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-10 mb-sm-1">
              <label class="form-label">{{ __('Oblast působnosti standardu') }}</label>
              <input class="form-control" id="show-tags" type="text" readonly>
            </div>
            <div class="col-12 col-lg-2 mb-sm-1">
              <label class="form-label">{{ __('Platnost standardu od') }}</label>
              <input class="form-control" id="show-efficiency" type="date" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-7 mb-sm-1">
              <label class="form-label">{{ __('Soubor') }}</label>
              <input class="form-control" id="show-file" type="text" readonly>
            </div>
            <div class="col-6 col-lg-2 mb-sm-1">
              <label class="form-label">{{ __('Status') }}</label>
              <input class="form-control" id="show-status" readonly>
            </div>
            <div class="col-6 col-lg-3 mb-sm-1">
              <label class="form-label">{{ __('Založil / upravil') }}</label>
              <input class="form-control" id="show-user_name" name="user_name" type="text" readonly>
            </div>
          </div>
          <input id="category_id" name="category_id" type="hidden">
          <input id="action" name="action" type="hidden" />
          <input id="hidden_id" name="hidden_id" type="hidden" />
          <input id="user_id" name="user_id" type="hidden" />
        </div>

        <div class="modal-footer">
          <div class="align-content-end flex">
            <a class="btn btn-red ms-auto hover-shadow" id="download-btn" type="button" href="">
              <svg class="icon icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                <path d="M13 16h-7a2 2 0 0 0 -2 2"></path>
                <path d="M15 19l3 3l3 -3"></path>
                <path d="M18 22v-9"></path>
              </svg>
              {{ __('Download standard') }}</a>
          </div>
          <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
            <svg class="icon icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <rect x="4" y="4" width="16" height="16" rx="2"></rect>
              <path d="M10 10l4 4m0 -4l-4 4"></path>
            </svg>
            {{ __('Close') }}
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Delete Modal --}}
  <div class="modal modal-blur fade" id="confirmModal" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted mb-2">
            {{ __('Do you really want to remove standard event?') }}<br>{{ __('This operation cannot be undone') }}
          </div>
          <div class="text-info">
            {{ __('If the standard contains appendices, it will be possible to subsequently attach these appendices to a new or different standard') }}
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

    function fill(Value) {
      $('#search').val(Value);
      $('#display').hide();
    }

    $(document).ready(function() {
      $("#search").keyup(function() {
        var name = $('#search').val();
        if (name === "") {
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
    // Form Modal Functions
    $(document).on('click', '.edit', function() {
      id = $(this).attr('id');
      $('#unique_code').prop('readonly', true);
      $('#form_result_modal, #form_result_window').html('');
      $.ajax({
        url: "/documents/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#inputForm')[0].reset();
          $('.modal-title').val('');
          $('#attachment, #action_button').removeClass('d-none');
          $('#formModal').modal('show');
          $('#modal-icon').html('{!! $categorie->svg_icon !!}').addClass('bg-{{ $categorie->color }}-lt');
          $('#modal-header').addClass("modal-header bg-{{ $categorie->color }}-lt");
          $('.modal-title').text("{{ __('Edit') }} {{ $categorie->button }} standard");
          $('#action').val("Edit");
          $('#category_id').val(html.data.category_id);
          $('#accordion_group').val(html.data.accordion_group);
          $('#folder_name').val(html.data.category.folder_name);
          $('#name').val(html.data.name);
          $('#processed').val(html.data.processed);
          $('#authorize').val(html.data.authorize);
          $('#examine').val(html.data.examine);
          $('#efficiency').val(html.data.efficiency);
          $('#revision').val(html.data.revision);
          $('#revision_date').val(html.data.revision_date);
          $('#next_revision_date').val(moment($('#revision_date').val()).add(1, 'Y').format('YYYY-MM-DD'));
          $('#tags').val(html.data.tags);
          $('#unique_code').val(html.data.unique_code);
          $('#description').val(html.data.description);
          $('#position').val(html.data.position);
          $('#attachment').val(html.data.attachment);
          $('#status').val(html.data.status);
          $('#user_id').val('{{ auth()->user()->id ?? null }}');
          $('#user_name').val(html.data.user.name);
          $('#hidden_id').val(html.data.id);
          $('#hidden_file').val(html.data.file);
          $('#revision_date').change(function() {
            var revisionDate = moment($(this).val()).format('YYYY-MM-DD')
            var nextRevisionDate = moment(revisionDate).add(1, 'Y').format('YYYY-MM-DD')
            var efficiencyDate = moment(revisionDate).year(2014).format('YYYY-MM-DD')
            $('#efficiency').val(efficiencyDate)
            $('#next_revision_date').val(nextRevisionDate)
          })
        }
      })
    });

    $(document).on('click', '.show', function() {
      id = $(this).attr('id');
      $('#unique_code').prop('readonly', true);
      $('#form_result_modal, #form_result_window').html('');
      $.ajax({
        url: "/documents/" + id,
        dataType: "json",
        success: function(html) {
          $('#inputForm')[0].reset();
          $('.modal-title').val('');
          $('#showModal').modal('show');
          $('#show-modal-icon').html('{!! $categorie->svg_icon !!}').addClass('bg-{{ $categorie->color }}-lt');
          $('#show-modal-header').addClass("modal-header bg-{{ $categorie->color }}-lt");
          $('.modal-title').text(html.data.name);
          $('#action').val("Show");
          $('#category_id').val(html.data.category_id);
          $('#show-folder_name').val(html.data.category.folder_name);
          $('#show-name').val(html.data.name);
          $('#show-processed').val(html.data.processed);
          $('#show-authorize').val(html.data.authorize);
          $('#show-examine').val(html.data.examine);
          $('#show-efficiency').val(html.data.efficiency);
          $('#show-revision').val(html.data.revision);
          $('#show-revision_date').val(html.data.revision_date);
          $('#show-next_revision_date').val(html.data.next_revision_date)
          $('#show-tags').val(html.data.tags);
          $('#show-description').val(html.data.description);
          $('#show-position').val(html.data.position);
          $('#show-file').val(html.data.file);
          $('#show-status').val(html.data.status);
          $('#show-user_id').val('{{ auth()->user()->id ?? null }}');
          $('#show-user_name').val(html.data.user.name);
          $('#attachment, #action_button').addClass('d-none');
          $('#show-hidden_id').val(html.data.id);
          $('#download-btn').attr("href", "/standardy/standard/" + html.data.id + "");
        }
      })
    });

    $('#openCreateModal').click(function() {
      $('#inputForm')[0].reset();
      $("#attachment, #action_button").removeClass('d-none');
      $('#unique_code').prop('readonly', true);
      $('#category_id').val('{{ $categorie->id }}');
      $('#formModal').modal('show');
      $('#modal-icon').html('{!! $categorie->svg_icon !!}').addClass('bg-{{ $categorie->color }}-lt');
      $('#modal-header').addClass("modal-header bg-{{ $categorie->color }}-lt");
      $('#action_button, .modal-title').text("{{ __('Create new') }} {{ $categorie->button }} standard");
      $('#action').val("Add");
      $('#position').val('{{ $lastpos + 1 }}');
      $('#folder_name').val("{{ $categorie->folder_name }}");
      $('#status').val('Schváleno');
      $('#user_id').val('{{ auth()->user()->id ?? null }}');
      $('#user_name').val('{{ auth()->user()->name ?? 'Guest' }}');
      $('#unique_code').val('STD{{ $categorie->id }}#{{ $lastpos + 1 }}');
      $('#revision').val('{{ $lastpos - $lastpos + 1 }}')
      $('#processed, #authorize, #examine').val('')
      $('#revision_date').change(function() {
        var revisionDate = moment($(this).val()).format('YYYY-MM-DD')
        var nextRevisionDate = moment(revisionDate).add(1, 'Y').format('YYYY-MM-DD')
        $('#efficiency').val($('#revision_date').val())
        $('#next_revision_date').val(nextRevisionDate)
      })
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
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' + data.success +
                '</li></ul></div>';
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

    // $("#stats").hide();
    // $("#stats-btn").click(function() {
    // console.log('clicked');
    // $("#stats").toggle();
    // });

    // $("#stats").hide();
    // $('#stats-btn').click(function() {
    //   $('#stats').slideToggle("slow");
    // });

    $("#attachments").hide();
    $("#addon-btn").click(function() {
      $('#attachments').slideToggle("slow");
    });
  </script>
@endsection
