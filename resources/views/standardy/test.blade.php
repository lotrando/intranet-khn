<div class="container-fluid">
  <div class="h-100">
    <div class="col-12">
      <div class="card p-2" style="height: 34rem">
        <div class="card-body card-body-scrollable card-body-scrollable-shadow p-0 shadow-sm">
          <div class="divide-y">
            <div>
              @foreach ($documents as $document)
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
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/' . $document->file) }}" target="_blank">
                              <h3 style="margin-bottom: 0;">{{ $document->position }}. {{ $document->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                          </div>
                          <div class="col-auto">
                            <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
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
                            <span class="btn btn-icon hover-shadow cursor-pointer" id="dropdownMenuButton-' . $data->id . '" data-bs-toggle="dropdown"
                                  title="Možnosti">
                              <svg class="icon dropdown-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
