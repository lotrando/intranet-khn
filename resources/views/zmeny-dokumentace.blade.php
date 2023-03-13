@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="{{ asset('img/zmeny-dokumentu.png') }}" rel="shortcut icon">
@endsection

@section('content')
  {{-- Page Wrapper Start --}}
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
  </div>

  <!-- Page -->
  <div class="row container-fluid mt-2">
    <div class="col-12">
      {{-- documents --}}
      @foreach ($documents as $document)
        <div class="accordion-item bg-white">
          <div id="test-{{ $document->position }}">
            <div class="accordion-body">
              <div class="list-group list-group-flush list-group-hoverable pt-1">
                <div class="list-group-item border-0 p-0">
                  <div class="row align-items-center g-3 mx-1">
                    <div class="avatar bg-{{ $document->category->color }}-lt col-auto" data-bs-toggle="tooltip"
                      data-bs-placement="top" data-bs-original-title="{{ $document->category->folder_name }} dokumentace">
                      <a
                        href="/{{ $document->category->category_file }}/{{ $document->category->folder_name }}/{{ $document->category->id }}">
                        <div class="text-uppercase">
                          {!! $document->category->svg_icon !!}
                        </div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <a href="{{ route('soubory.dokument.download', $document->id) }}" target="_blank">
                        <span class="avatar bg-{{ $document->category->color }}-lt" data-bs-toggle="tooltip"
                          data-bs-placement="top" data-bs-original-title="Stáhnout dokument">
                          <img src="{{ asset('img/files/pdf.png') }}" alt="PDF soubor" height="32px">
                        </span>
                      </a>
                    </div>
                    <div class="col text-truncate" id="{{ $document->id }}">
                      <span>
                        <p class="show d-inline text-primary text-decoration-none cursor-pointer"
                          id="{{ $document->id }}" data-bs-toggle="tooltip" data-bs-placement="top"
                          data-bs-original-title="Více informací o dokumentu {{ $document->description }}"
                          style="margin-bottom: 0;">
                          {{ $document->name }}
                        </p>
                      </span>
                      <div class="d-block description text-muted text-truncate">
                        {{ $document->description }}</div>
                    </div>
                  </div>
                  @foreach ($document->addons as $add)
                    <div class="row align-items-center g-3 mx-2">
                      <div class="avatar bg-{{ $document->category->color }}-lt col-auto">
                        <div class="text-uppercase" data-bs-toggle="tooltip" data-bs-placement="top"
                          data-bs-original-title="ID #{{ $document->id }}#{{ $add->id }}">
                          <svg class="icon icon-tabler icon-tabler-plus text-{{ $document->category->color }}"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19">
                            </line>
                            <line x1="5" y1="12" x2="19" y2="12">
                            </line>
                          </svg>
                        </div>
                      </div>
                      <div class="col-auto">
                        <a href="{{ route('soubory.dokument.addon.download', $add->id) }}">
                          <span class="avatar bg-{{ $document->category->color }}-lt" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-original-title="Stáhnout přílohu">
                            <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha dokumentu" height="32px">
                          </span>
                        </a>
                      </div>
                      <div class="col text-truncate" id="{{ $add->id }}">
                        <span>
                          <p class="show-addon d-inline text-azure text-decoration-none cursor-pointer"
                            id="{{ $add->id }}" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Více informací o příloze {{ $add->description }}"
                            style="margin-bottom: 0;">
                            {{ $document->position }}. {{ $document->name }} - příloha
                            č.{{ $add->addon_number }}</p>
                        </span>
                        <div class="d-block description text-muted text-truncate">
                          {{ $add->description }}</div>
                      </div>
                      <div class="col-auto">
                        @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                          <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                        @endif
                        @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                          <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                        @endif
                        <span
                          class="text-muted description">{{ Carbon\Carbon::parse($add->updated_at)->diffForHumans() }}</span>
                        <svg class="icon icon-tabler icon-tabler-certificate-2 text-yellow"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <circle cx="12" cy="15" r="3"></circle>
                          <path d="M10 7h4"></path>
                          <path d="M10 18v4l2 -1l2 1v-4"></path>
                          <path d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2">
                          </path>
                        </svg>
                        <span class="text-muted description">Revize: {{ $add->revision }}</span>
                        @auth
                          @if ($add->status == 'Rozpracováno')
                            <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">Rozpracováno</span>
                          @else
                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Schváleno</span>
                          @endif
                        @endauth
                      </div>
                    </div>
                  @endforeach
                </div>
                <div class="list-group-item py-1 px-1">
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
                      <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="15" cy="15" r="3"></circle>
                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                        </path>
                        <line x1="6" y1="9" x2="18" y2="9">
                        </line>
                        <line x1="6" y1="12" x2="9" y2="12">
                        </line>
                        <line x1="6" y1="15" x2="8" y2="15">
                        </line>
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
                  </div>
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
  <!-- Page Wrapper End -->
  </div>
@endsection

@section('modals')
  {{-- Show Modal --}}
  <div class="modal fade" id="showModal" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-full-width" role="document">
      <div class="modal-content shadow-lg">
        <div id="show-modal-header">
          <h5 class="modal-title"></h5>
          <div class="avatar avatar-transparent" id="show-modal-icon"></div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5">

              <div class="row">
                <div class="col-2 mb-3 mt-3">
                  <label class="form-label">{{ __('Position') }}</label>
                  <input class="form-control" id="show-position" type="text" readonly>
                </div>
                <div class="col-8 mb-3 mt-3">
                  <label class="form-label">{{ __('Name') }} dokumentu</label>
                  <input class="form-control" id="show-name" type="text" readonly>
                </div>
                <div class="col-2 mb-3 mt-3">
                  <label class="form-label">{{ __('Revision') }}</label>
                  <input class="form-control" id="show-revision" type="text" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-3">
                  <label class="form-label">{{ __('Popis dokumentu') }} </label>
                  <input class="form-control" id="show-description" type="text" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Datum revize') }}</label>
                  <input class="form-control" id="show-revision_date" type="date" readonly>
                </div>
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Datum další revize') }}</label>
                  <input class="form-control" id="show-next_revision_date" type="date" readonly>
                </div>
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Platnost dokumentu od') }}</label>
                  <input class="form-control" id="show-efficiency" type="date" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Zpracoval/a') }}</label>
                  <input class="form-control" id="show-processed" type="text" readonly>
                </div>
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Schválil/a') }}</label>
                  <input class="form-control" id="show-authorize" type="text" readonly>
                </div>
                <div class="col-4 mb-3">
                  <label class="form-label">{{ __('Kontrolu provedl/a') }}</label>
                  <input class="form-control" id="show-examine" type="text" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-3">
                  <label class="form-label">{{ __('Oblast působnosti dokumentu') }}</label>
                  <input class="form-control" id="show-tags" type="text" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-3">
                  <label class="form-label">{{ __('Soubor') }}</label>
                  <input class="form-control" id="show-file" type="text" readonly>
                </div>
                <div class="col-6 mb-3">
                  <label class="form-label">{{ __('Status') }}</label>
                  <input class="form-control" id="show-status" readonly>
                </div>
                <div class="col-6 mb-3">
                  <label class="form-label">{{ __('Založil / upravil') }}</label>
                  <input class="form-control" id="show-user_name" name="user_name" type="text" readonly>
                </div>
              </div>
            </div>

            <div class="col-7 p-1">
              <div id="pdf-preview-show"></div>
              <input id="category_id" name="category_id" type="hidden">
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
              <input id="user_id" name="user_id" type="hidden" />
            </div>
          </div>
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
              {{ __('Download file') }}</a>
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
@endsection

@section('scripts')
  <script src="{{ asset('js/pdfobject.js') }}"></script>

  <script>
    // Form Modal Functions
    $(document).on('click', '.show', function() {
      id = $(this).attr('id');
      $('#unique_code').prop('readonly', true);
      $('#form_result_modal, #form_result_window').html('');
      $.ajax({
        url: "/documents/" + id,
        dataType: "json",
        success: function(html) {
          // $('#inputForm')[0].reset()
          $('.modal-title').val('')
          $('#pdf-preview-show, #pdf-preview, #pdf-preview-addon-show').removeClass('d-none')
          $('#showModal').modal('show')
          $('#show-modal-icon').html('{!! $document->category->svg_icon !!}').addClass(
            'bg-{{ $document->category->color }}-lt')
          $('#show-modal-header').addClass(
            "modal-header bg-{{ $document->category->color }}-lt")
          $('.modal-title').text(html.data.description)
          $('#category_id').val(html.data.category_id)
          $('#show-folder_name').val(html.data.category.folder_name)
          $('#show-name').val(html.data.name)
          $('#show-processed').val(html.data.processed)
          $('#show-authorize').val(html.data.authorize)
          $('#show-examine').val(html.data.examine)
          $('#show-efficiency').val(html.data.efficiency)
          $('#show-revision').val(html.data.revision)
          $('#show-revision_date').val(html.data.revision_date)
          $('#show-next_revision_date').val(html.data.next_revision_date)
          $('#show-tags').val(html.data.tags)
          $('#show-description').val(html.data.description)
          $('#show-position').val(html.data.position)
          $('#show-file').val(html.data.file)
          $('#show-status').val(html.data.status)
          $('#show-user_id').val('{{ auth()->user()->id ?? null }}')
          $('#show-user_name').val(html.data.user.name)
          $('#attachment, #action_button').addClass('d-none')
          $('#show-hidden_id').val(html.data.id)
          $('#download-btn').attr("href", "/soubory/standard/" + html.data.id + "")
          PDFObject.embed("../../soubory/" + html.data.file + "#toolbar=0",
            "#pdf-preview-show", {
              height: "33rem"
            })
        }
      })
    });
  </script>
@endsection
