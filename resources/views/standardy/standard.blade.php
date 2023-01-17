@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/' . $categorie->category_icon) ?? ' ' }}" rel="shortcut icon">
@endsection

@section('searchbar')
<div class="col-sm-12 col-lg-12">
  <div class="input-icon">
    <span class="input-icon-addon">
      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
           stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <circle cx="10" cy="10" r="7"></circle>
        <line x1="21" y1="21" x2="15" y2="15"></line>
      </svg>
    </span>
    <input class="form-control" id="search" type="text" placeholder="{{ __('Hledat standard ...') }}">
  </div>
</div>
@endsection

@section('content')
{{-- Page Wrapper Start --}}
<div class="page-wrapper">
  <div class="page-header d-print-none">
    <div class="container-fluid">
      <div class="row align-items-center">

        <div class="col-12">
          <div class="bg-transparent mb-2">
            <div class="row d-flex align-items-center">
              <div class="col-auto d-flex align-items-center pe-1 mb-2">
                <span>Celkem</span>
                <span class="d-md-inline d-xxl-inline ms-2 text-red text-bold">{{ $allDocuments->count() }}</span>
              </div>
              <div class="col-auto d-flex align-items-center ps-1 mb-2">
                <span>standardů</span>
              </div>
              @foreach ($categories as $category)
              <div class="col-auto d-flex align-items-center pe-1 mb-2">
                <span class="legend me-1 bg-{{ $category->color }}"></span>
                <span class="d-md-inline d-xxl-inline ms-1 text-muted">{{ $category->documents->count() }}</span>
                <span class="d-md-inline d-xxl-inline ms-1">{{ $category->category_name }}</span>
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
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              @auth
              <button class="btn btn-success me-2 d-none d-sm-inline-block hover-shadow-sm" id="openCreateModal" data-bs-toggle="tooltip" data-bs-placement="left"
                      data-bs-original-title="{{ __('Vytvoří nový ' . $categorie->button . ' standard') }}">
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
      </div>
      <!-- Page Title Buttons End -->

      <!-- Page -->
      <div class="row mt-2">
        <div class="col-12">
          @foreach ($documents as $document)
          <div class="accordion-item">
            <div class="show" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
              <div class="accordion-body pt-0">
                <div class="list-group list-group-flush list-group-hoverable pt-1">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="avatar bg-{{ $document->category->color }}-lt col-auto">
                        <a class="text-decoration-none" href="/standardy/{{ $document->category->folder_name . '/' .  $document->category->id }}">
                          <div class="text-uppercase">
                            {!! $document->category->svg_icon !!}
                          </div>
                        </a>
                      </div>
                      {{-- <div class="avatar bg-{{ $document->category->color }}-lt col-auto ms-2">
                        @if($document->category->category_name <> 'Léčebné')
                          <div class="text-uppercase mt-2">
                            <h1>{{ $document->position }}</h1>
                            @else
                            <div class="text-uppercase">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-frame" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="7" x2="20" y2="7"></line>
                                <line x1="4" y1="17" x2="20" y2="17"></line>
                                <line x1="7" y1="4" x2="7" y2="20"></line>
                                <line x1="17" y1="4" x2="17" y2="20"></line>
                              </svg>
                              @endif
                            </div>
                          </div> --}}
                          <div class=" col-auto">
                            <a href="{{ route('download', $document->id) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF soubor" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ route('download', $document->id) }}" target="_blank">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                          </div>
                          <div class="col-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                              <line x1="16" y1="3" x2="16" y2="7"></line>
                              <line x1="8" y1="3" x2="8" y2="7"></line>
                              <line x1="4" y1="11" x2="20" y2="11"></line>
                              <rect x="8" y="15" width="2" height="2"></rect>
                            </svg>
                            <span class="text-muted">upraveno {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <circle cx="15" cy="15" r="3"></circle>
                              <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                              <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                              <line x1="6" y1="9" x2="18" y2="9"></line>
                              <line x1="6" y1="12" x2="9" y2="12"></line>
                              <line x1="6" y1="15" x2="8" y2="15"></line>
                            </svg>
                            <span class="text-muted">Revize: {{ $document->revision }}</span>
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
                          </div>
                          @auth
                          <div class="col-auto">
                            <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown">
                              <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                   stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                   data-bs-original-title="{{ __('Actions') }}">
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
                      @foreach ($document->addon as $add)
                      <div class="row align-items-center mb-1">
                        <div class="col-auto">
                          <h3 class="mb-0 text-{{ $document->unique_code }}">{{ $document->position }}</h3>
                        </div>
                        <div class="col-auto">
                          <a href="{{ url('standardy/' . $add->file) }}">
                            <span class="avatar">
                              <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                            </span>
                          </a>
                        </div>
                        <div class="col text-truncate">
                          <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ route('download', $document->id) }}">
                            <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha č. {{ $add->name }}</h3>
                          </a>
                          <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                        </div>
                        <div class="col-auto">
                          <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
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
        <!-- Page End -->
      </div>
    </div>

    <!-- Page Wrapper End -->
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
                <div class="col-2 col-lg-1 mb-sm-1">
                  <label class="form-label">{{ __('Position') }} č:</label>
                  <input class="form-control" id="position" name="position" type="text">
                </div>
                <div class="col-10 col-lg-5 mb-sm-1">
                  <label class="form-label">{{ __('Name') }} <small class="text-azure">( usnadní vyhledávání )</small></label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="{{ __('Kategorický název standardu') }}">
                </div>
                <div class="col-4 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="revision" name="revision" type="text" placeholder="{{ __('Číslo nebo datum') }}">
                </div>
                <div class="col-4 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Datum revize') }}</label>
                  <input class="form-control" id="revision_date" name="revision_date" type="date" placeholder="{{ __('Revision Date') }}">
                </div>
                <div class="col-4 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Datum další revize') }}</label>
                  <input class="form-control" id="next_revision_date" name="next_revision_date" type="date" placeholder="{{ __('Next revision Date') }}">
                </div>
              </div>
              <div class="row">
                <div class="col-10 col-lg-11 mb-sm-1">
                  <label class="form-label">{{ __('Jednoduchý popis standardu') }} <small class="text-azure">( snadní vyhledávání )</small></label>
                  <input class="form-control" id="description" name="description" type="text" placeholder="{{ __('Konkrétní popis standardu') }}">
                </div>
                <div class="col-2 col-lg-1 mb-sm-1">
                  <label class="form-label">{{ __('Unikátní kód') }}</label>
                  <input class="form-control" id="unique_code" name="unique_code" type="text" placeholder="{{ __('Značka #') }}">
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Zpracoval/a') }}</label>
                  <input class="form-control" id="processed" name="processed" type="text" placeholder="{{ __('Autor standardu') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Schválil/a') }}</label>
                  <input class="form-control" id="authorize" name="authorize" type="text" placeholder="{{ __('Standard schválil') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Kontrolu provedl/a') }}</label>
                  <input class="form-control" id="examine" name="examine" type="text" placeholder="{{ __('Standard přezkoumal') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Platnost stnadardu od ') }}</label>
                  <input class="form-control" id="efficiency" name="efficiency" type="date" placeholder="{{ __('Datum platnosti') }}">
                </div>
                <div class="col-12 col-lg-4 mb-sm-1">
                  <label class="form-label">{{ __('Oblast působnosti standardu') }} <small class="text-azure">( usnadní vyhledávání )</small></label>
                  {{-- <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-label">INT</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-label">NEU</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" checked="">
                    <span class="form-check-label">ORT</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" checked="">
                    <span class="form-check-label">ONP</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" checked="">
                    <span class="form-check-label">OPL</span>
                  </label>
                  <label class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" checked="">
                    <span class="form-check-label">JIP</span>
                  </label> --}}
                  <input class="form-control" id="tags" name="tags" type="text" placeholder="{{ __('Jednotlivé oddělení oddělte čárkou') }}">
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
              <div class="row" id="attachments">
                <div class="hr-text text-muted my-3">
                  <span style="font-size: 0.6rem">{{ __('Attachment') }}</span>
                </div>
                <div class="col-12 col-lg-10 mb-sm-1">
                  <label class="form-label">{{ __('Jednoduchý popis přílohy') }}</label>
                  <input class="form-control" id="attachment1" name="attachment1" type="text" placeholder="{{ __('Jednoduchý popis přílohy standardu') }}">
                </div>
                <div class="col-12 col-lg-2 mb-sm-1">
                  <label class="form-label">{{ __('Unikátní kód') }}</label>
                  <input class="form-control" id="unique_code1" name="unique_code1" type="text" placeholder="{{ __('Unikátní kód') }}">
                </div>
                <div class="col-12 col-lg-9 mb-sm-1">
                  <label class="form-label">{{ __('Soubor') }}</label>
                  <input class="form-control" id="file1" name="file1" type="file" placeholder="{{ __('Soubor standardu ve formátu PDF') }}">
                </div>
                <div class="col-12 col-lg-3 mb-sm-1">
                  <label class="form-label">{{ __('Status') }}</label>
                  <select class="form-select" id="status1" name="status1">
                    <option value="Schváleno">Schváleno</option>
                    <option value="Rozpracováno">Rozpracováno</option>
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
              <button class="btn btn-primary ms-auto hover-shadow" id="addon-btn" type="button">{{ __('Attachment') }}</button>
              <div class="align-content-end flex">
                <button class="btn btn-primary ms-auto hover-shadow" id="action_button" name="action_button" type="submit"></button>
              </div>
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
      $('#dheader').hide();
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
          $('#processed').val(html.data.processed);
          $('#authorize').val(html.data.authorize);
          $('#examine').val(html.data.examine);
          $('#efficiency').val(html.data.efficiency);
          $('#revision').val(html.data.revision);
          $('#revision_date').val(html.data.revision_date);
          $('#next_revision_date').val(html.data.next_revision_date);
          $('#tags').val(html.data.tags);
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
      $('#position').val('{{ $lastpos + 1 }}');
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

    $("#attachments").hide();
    $("#addon-btn").click(function() {
      console.log('clicked');
      $("#attachments").toggle();
    });
    </script>
    @endsection
