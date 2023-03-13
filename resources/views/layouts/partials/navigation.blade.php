<div class="navbar-expand-md sticky-top shadow-sm">
  <div class="navbar-collapse collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-fluid">
        <ul class="navbar-nav">
          @foreach ($navitems as $navitem)
            <li class="nav-item {{ request()->segment(1) == $navitem->route ? 'active' : '' }}" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-original-title="{{ __($navitem->tooltip) }}">
              <a class="nav-link" href="{{ route($navitem->route) }}">
                <span class="nav-link-icon icon d-inline {{ $navitem->icon_class }}">
                  {!! $navitem->svg_icon !!}
                </span>
                {{ $navitem->name }}
              </a>
            </li>
          @endforeach
          {{-- Oznámení Dropdown --}}
          <li class="nav-item dropdown {{ request()->segment(1) == 'oznameni' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Co se děje na intranetu KHN">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"
              role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                  <polyline points="11 12 12 12 12 16 13 16"></polyline>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Oznámení') }}
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item {{ request()->segment(2) == 'prehledy' ? 'active' : '' }}"
                href="{{ route('oznameni.prehledy') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-presentation-analytics text-red"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 12v-4"></path>
                    <path d="M15 12v-2"></path>
                    <path d="M12 12v-1"></path>
                    <path d="M3 4h18"></path>
                    <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10"></path>
                    <path d="M12 16v4"></path>
                    <path d="M9 20h6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Přehledy') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'zmeny-standardu' ? 'active' : '' }}"
                href="{{ route('oznameni.zmeny-standardu') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon text-purple" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                    <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                    <path d="M15 16l3 -3l3 3"></path>
                    <path d="M18 13v9"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Změny ve standardech') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'zmeny-v-dokumentaci' ? 'active' : '' }}"
                href="{{ route('oznameni.zmeny-v-dokumentaci') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon text-pink" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                    <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                    <path d="M9 14l2 2l4 -4"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Změny v dokumentaci') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'servis' ? 'active' : '' }}"
                href="{{ route('oznameni.servis') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon text-cyan" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Odstávky a servis') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'sluzby' ? 'active' : '' }}"
                href="{{ route('oznameni.sluzby') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-users text-yellow" xmlns="http://www.w3.org/2000/svg"
                    width="40" height="40" viewBox="0 0 24 24" stroke-width="21" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Změny služeb') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'informace' ? 'active' : '' }}"
                href="{{ route('oznameni.informace') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-info-square-rounded text-cyan"
                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                    stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 8h.01"></path>
                    <path d="M11 12h1v4h1"></path>
                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Informace') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'seminare' ? 'active' : '' }}"
                href="{{ route('oznameni.seminare') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-armchair text-orange" xmlns="http://www.w3.org/2000/svg"
                    width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z">
                    </path>
                    <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5"></path>
                    <path d="M6 19v2"></path>
                    <path d="M18 19v2"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Semináře') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'akord' ? 'active' : '' }}"
                href="{{ route('oznameni.akord') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler text-bitbucket" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="3" y1="21" x2="21" y2="21"></line>
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                    <line x1="10" y1="9" x2="14" y2="9"></line>
                    <line x1="12" y1="7" x2="12" y2="11"></line>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Akord') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'kultura' ? 'active' : '' }}"
                href="{{ route('oznameni.kultura') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-masks-theater text-google"
                    xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M13.192 9h6.616a2 2 0 0 1 1.992 2.183l-.567 6.182a4 4 0 0 1 -3.983 3.635h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183z">
                    </path>
                    <path d="M15 13h.01"></path>
                    <path d="M18 13h.01"></path>
                    <path d="M15 16.5c1 .667 2 .667 3 0"></path>
                    <path
                      d="M8.632 15.982a4.037 4.037 0 0 1 -.382 .018h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183h6.616a2 2 0 0 1 2 2">
                    </path>
                    <path d="M6 8h.01"></path>
                    <path d="M9 8h.01"></path>
                    <path d="M6 12c.764 -.51 1.528 -.63 2.291 -.36"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Kultura') }}
                </span>
              </a>
            </div>
          </li>
          {{-- Stravování --}}
          <li class="nav-item dropdown {{ request()->segment(1) == 'stravovani' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Nabídky stravovacího provozu">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-tools-kitchen-2 text-cyan" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3">
                  </path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Stravování') }}
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item {{ request()->segment(2) == 'obedy' ? 'active' : '' }}"
                href="{{ route('stravovani.obedy') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-meat text-red" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821">
                    </path>
                    <path
                      d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z">
                    </path>
                    <path d="M7.5 16l1 1"></path>
                    <path
                      d="M12.975 21.425c3.905 -3.906 4.855 -9.288 2.121 -12.021c-2.733 -2.734 -8.115 -1.784 -12.02 2.121">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Objednávka obědů') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'kantyna' ? 'active' : '' }}"
                href="{{ route('stravovani.kantyna') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-baguette text-yellow" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M5.628 11.283l5.644 -5.637c2.665 -2.663 5.924 -3.747 8.663 -1.205l.188 .181a2.987 2.987 0 0 1 0 4.228l-11.287 11.274a2.996 2.996 0 0 1 -4.089 .135l-.143 -.135c-2.728 -2.724 -1.704 -6.117 1.024 -8.841z">
                    </path>
                    <path d="M9.5 7.5l1.5 3.5"></path>
                    <path d="M6.5 10.5l1.5 3.5"></path>
                    <path d="M12.5 4.5l1.5 3.5"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Nabídka kantýny') }}
                </span>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Email KHN"
              href="https://email.khn.cz" target="_blank">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-mail text-yellow" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                  <polyline points="3 7 12 13 21 7"></polyline>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Pošta') }}
              </span>
            </a>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'dokumenty' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Ddokumentace nemocnice">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon text-pink" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                  <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                  <path d="M10 14h4"></path>
                  <path d="M12 12v4"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Dokumentace') }}
              </span>
            </a>
            <div class="dropdown-menu">
              @foreach ($docs as $document)
                <a class="dropdown-item {{ request()->segment(2) == $document->folder_name ? 'active' : '' }}"
                  href="{{ route('dokumenty.' . $document->folder_name . '', $document->id) }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    {!! $document->svg_icon !!}
                  </span>
                  <span class="nav-link-title">
                    {{ $document->category_name }}
                  </span>
                  <span
                    class="badge badge-sm bg-{{ $document->color }}-lt text-uppercase ms-auto">{{ $document->documents->count() }}</span>
                </a>
              @endforeach
            </div>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'standardy' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Standardy nemocnice">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon text-purple" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                  <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                  <path d="M9 8h6"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Standardy') }}
              </span>
            </a>
            <div class="dropdown-menu">
              @foreach ($stands as $category)
                <a class="dropdown-item {{ request()->segment(2) == $category->folder_name ? 'active' : '' }}"
                  href="{{ route('standardy.' . $category->folder_name . '', $category->id) }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    {!! $category->svg_icon !!}
                  </span>
                  <span class="nav-link-title">
                    {{ $category->category_name }}
                  </span>
                  <span
                    class="badge badge-sm bg-{{ $category->color }}-lt text-uppercase ms-auto">{{ $category->documents->count() }}</span>
                </a>
              @endforeach
            </div>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'bozp' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="BOZP a PO dokumenty">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M5 21h14"></path>
                  <path
                    d="M17 21v-5h1a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-1v-4a5 5 0 0 0 -10 0v4h-1a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h1v5">
                  </path>
                  <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                  <path d="M6 8h12"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('BOZP a PO') }}
              </span>
            </a>
            <div class="dropdown-menu">
              @foreach ($bozps as $bozp)
                <a class="dropdown-item {{ request()->segment(2) == $bozp->folder_name ? 'active' : '' }}"
                  href="{{ route('bozp.' . $bozp->folder_name . '', $bozp->id) }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    {!! $bozp->svg_icon !!}
                  </span>
                  <span class="nav-link-title">
                    {{ $bozp->category_name }}
                  </span>
                  <span
                    class="badge badge-sm bg-{{ $bozp->color }}-lt text-uppercase ms-auto">{{ $bozp->documents->count() }}</span>
                </a>
              @endforeach
            </div>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'media' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Radio, Video, Překladatelé...">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-device-tv-old text-lime" xmlns="http://www.w3.org/2000/svg"
                  width="40" height="40" viewBox="0 0 24 24" stroke-width="21" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                  <path d="M16 3l-4 4l-4 -4"></path>
                  <path d="M15 7v13"></path>
                  <path d="M18 15v.01"></path>
                  <path d="M18 12v.01"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Média') }}
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown">
                <a class="dropdown-item{{ request()->segment(2) == 'radio' ? 'active' : '' }}"
                  href="{{ route('media.radio') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-radio text-orange" xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5">
                      </path>
                      <path d="M4 12h16"></path>
                      <path d="M7 12v-2"></path>
                      <path d="M17 16v.01"></path>
                      <path d="M13 16v.01"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Rádio
                  </span>
                </a>
                <a class="dropdown-item {{ request()->segment(2) == 'videa' ? 'active' : '' }}"
                  href="{{ route('media.videa') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-movie text-blue" xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                      <line x1="8" y1="4" x2="8" y2="20">
                      </line>
                      <line x1="16" y1="4" x2="16" y2="20">
                      </line>
                      <line x1="4" y1="8" x2="8" y2="8">
                      </line>
                      <line x1="4" y1="16" x2="8" y2="16">
                      </line>
                      <line x1="4" y1="12" x2="20" y2="12">
                      </line>
                      <line x1="16" y1="8" x2="20" y2="8">
                      </line>
                      <line x1="16" y1="16" x2="20" y2="16">
                      </line>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Videa
                  </span>
                </a>
                <a class="dropdown-item {{ request()->segment(2) == 'prekladatele' ? 'active' : '' }}"
                  href="{{ route('media.prekladatele') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-language nav-link-icon text-yellow"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 5h7"></path>
                      <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
                      <path d="M5 9c-.003 2.144 2.952 3.908 6.7 4"></path>
                      <path d="M12 20l4 -9l4 9"></path>
                      <path d="M19.1 18h-6.2"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Překladatelé
                  </span>
                </a>
                <div class="dropend">
                  <a class="dropdown-item dropdown-toggle show" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#" role="button" aria-expanded="true">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-headset text-green" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="13" rx="2" width="4" height="6"></rect>
                        <rect x="16" y="13" rx="2" width="4" height="6"></rect>
                        <path d="M4 15v-3a8 8 0 0 1 16 0v3"></path>
                        <path d="M18 19a6 3 0 0 1 -6 3"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Edukační videa
                    </span>
                  </a>
                  <div class="dropdown-menu show" data-bs-popper="static">
                    <a class="dropdown-item {{ request()->segment(3) == 'lekis' ? 'active' : '' }}"
                      href="{{ route('media.videa-lekis') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon icon-tabler icon-tabler-pill text-lime" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path>
                          <line x1="8.5" y1="8.5" x2="15.5" y2="15.5"></line>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Lekis
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(3) == 'bozp' ? 'active' : '' }}"
                      href="{{ route('media.videa-bozp') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon icon-tabler icon-tabler-flame-off text-red"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path
                            d="M8.973 8.974c-.335 .378 -.67 .716 -.973 1.026c-1.226 1.26 -2 3.24 -2 5a6 6 0 0 0 11.472 2.466m.383 -3.597c-.32 -1.409 -1.122 -3.045 -1.855 -3.869c-.281 .472 -.543 .87 -.79 1.202m-2.358 -2.35c-.068 -2.157 -1.182 -4.184 -1.852 -4.852c0 .968 -.18 1.801 -.465 2.527">
                          </path>
                          <path d="M3 3l18 18"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        PO a BOZP
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Odbory KHN a.s."
              href="{{ route('zvos') }}">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon text-pink" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                  <path d="M13 7l0 .01"></path>
                  <path d="M17 7l0 .01"></path>
                  <path d="M17 11l0 .01"></path>
                  <path d="M17 15l0 .01"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('ZV OS') }}
              </span>
            </a>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'rezervace' ? 'active' : '' }}"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Rezervace">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
              href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 2l3 5h6l-3 5l3 5h-6l-3 5l-3 -5h-6l3 -5l-3 -5h6z"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Možnosti') }}
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown">
                <div class="dropend">
                  <a class="dropdown-item dropdown-toggle show" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" href="#" role="button" aria-expanded="true">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon text-azure" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                        </path>
                        <path d="M16 3l0 4"></path>
                        <path d="M8 3l0 4"></path>
                        <path d="M4 11l16 0"></path>
                        <path d="M8 15h2v2h-2z"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Reservation') }}
                    </span>
                  </a>
                  <div class="dropdown-menu show" data-bs-popper="static">
                    <a class="dropdown-item {{ request()->segment(1) == 'paints' ? 'active' : '' }}"
                      href="{{ route('paints.index') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon text-red" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                          </path>
                          <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2"></path>
                          <path d="M10 15m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z">
                          </path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        {{ __('Painting') }}
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'bikes' ? 'active' : '' }}" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon text-blue" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M5 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                          <path d="M19 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                          <path d="M12 19l0 -4l-3 -3l5 -4l2 3l3 0"></path>
                          <path d="M17 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        {{ __('Bikes') }}
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'tires' ? 'active' : '' }}" href="#">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon text-mute" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                          <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                          <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        {{ __('Tires') }}
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="my-2">
          @yield('searchbar')
        </div>
        @yield('buttons')
      </div>
    </div>
  </div>
</div>
