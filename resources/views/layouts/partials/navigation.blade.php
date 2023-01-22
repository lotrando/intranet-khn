<div class="navbar-expand-md sticky-top shadow-sm">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-fluid">
        <ul class="navbar-nav">
          @foreach ($navitems as $navitem)
          <li class="nav-item {{ request()->segment(1) == $navitem->route ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{ __($navitem->tooltip) }}">
            <a class="nav-link" href="{{ route($navitem->route) }}">
              <span class="nav-link-icon icon d-inline {{ $navitem->icon_class }}">
                {!! $navitem->svg_icon !!}
              </span>
              {{ $navitem->name }}
            </a>
          </li>
          @endforeach
          {{-- Oznámení Dropdown --}}
          <li class="nav-item dropdown {{ request()->segment(1) == 'oznameni' ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Co se děje na intranetu KHN">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'prehledy' ? 'active' : '' }}" href="{{ route('oznameni.prehledy') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-presentation-analytics text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'zmeny-standardu' ? 'active' : '' }}" href="{{ route('oznameni.zmeny-standardu') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                    <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                    <path d="M15 16l3 -3l3 3"></path>
                    <path d="M18 13v9"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Změny standardů') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'zmeny-v-dokumentaci' ? 'active' : '' }}" href="{{ route('oznameni.zmeny-v-dokumentaci') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'servis' ? 'active' : '' }}" href="{{ route('oznameni.servis') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon text-cyan" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Odstávky a servis') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'sluzby' ? 'active' : '' }}" href="{{ route('oznameni.sluzby') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-users text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'informace' ? 'active' : '' }}" href="{{ route('oznameni.informace') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-info-square-rounded text-cyan" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'seminare' ? 'active' : '' }}" href="{{ route('oznameni.seminare') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-armchair text-orange" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z">
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
              <a class="dropdown-item {{ request()->segment(2) == 'akord' ? 'active' : '' }}" href="{{ route('oznameni.akord') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler text-bitbucket" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item {{ request()->segment(2) == 'kultura' ? 'active' : '' }}" href="{{ route('oznameni.kultura') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-masks-theater text-google" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.192 9h6.616a2 2 0 0 1 1.992 2.183l-.567 6.182a4 4 0 0 1 -3.983 3.635h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183z">
                    </path>
                    <path d="M15 13h.01"></path>
                    <path d="M18 13h.01"></path>
                    <path d="M15 16.5c1 .667 2 .667 3 0"></path>
                    <path d="M8.632 15.982a4.037 4.037 0 0 1 -.382 .018h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183h6.616a2 2 0 0 1 2 2">
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
          <li class="nav-item dropdown {{ request()->segment(1) == 'stravovani' ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Nabídky stravovacího provozu">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-tools-kitchen-2 text-cyan" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3">
                  </path>
                </svg>
              </span>
              <span class="nav-link-title">
                {{ __('Stravování') }}
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item {{ request()->segment(2) == 'obedy' ? 'active' : '' }}" href="{{ route('stravovani.obedy') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-meat text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821">
                    </path>
                    <path
                          d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z">
                    </path>
                    <path d="M7.5 16l1 1"></path>
                    <path d="M12.975 21.425c3.905 -3.906 4.855 -9.288 2.121 -12.021c-2.733 -2.734 -8.115 -1.784 -12.02 2.121">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Objednávka obědů') }}
                </span>
              </a>
              <a class="dropdown-item {{ request()->segment(2) == 'kantyna' ? 'active' : '' }}" href="{{ route('stravovani.kantyna') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-baguette text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <a class="nav-link" href="https://email.khn.cz" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Email KHN">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-mail text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
          <li class="nav-item dropdown" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Přehled dokumentace nemocnice">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 11h6m-3 -3v6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Personální') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-nurse text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z">
                    </path>
                    <path d="M10 12h4"></path>
                    <path d="M12 10v4"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Sesterská') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-hand-sanitizer text-azure" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z"></path>
                    <path d="M15 3h-6a2 2 0 0 0 -2 2"></path>
                    <path d="M12 3v5"></path>
                    <path d="M12 11v4"></path>
                    <path d="M10 13h4"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Hygiena') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-old text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="21"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M11 21l-1 -4l-2 -3v-6"></path>
                    <path d="M5 14l-1 -3l4 -3l3 2l3 .5"></path>
                    <circle cx="8" cy="4" r="1"></circle>
                    <path d="M7 17l-2 4"></path>
                    <path d="M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Pacient') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-test-pipe text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124"></path>
                    <path d="M7 13h8"></path>
                    <path d="M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z"></path>
                    <path d="M15 3l6 6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('OKB') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-radioactive text-orange" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path>
                    <path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path>
                    <path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('RDG') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-devices-2 text-blue" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6"></path>
                    <rect x="13" y="4" width="8" height="16" rx="1"></rect>
                    <line x1="7" y1="19" x2="10" y2="19"></line>
                    <line x1="17" y1="8" x2="17" y2="8.01"></line>
                    <circle cx="17" cy="16" r="1"></circle>
                    <line x1="9" y1="15" x2="9" y2="19"></line>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('IT') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-heartbeat text-pink" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572">
                    </path>
                    <path d="M3 13h2l2 3l2 -6l1 3h3"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('KPR') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-cards" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z">
                    </path>
                    <path d="M15 4h1a1 1 0 0 1 1 1v3.5"></path>
                    <path d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Komunikační karty') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-checkup-list text-lime" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="21"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                    <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                    <path d="M9 14h.01"></path>
                    <path d="M9 17h.01"></path>
                    <path d="M12 16l1 1l3 -3"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Vyhodnocení dotazníků') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-help text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="12" y1="17" x2="12" y2="17.01"></line>
                    <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Návody') }}
                </span>
              </a>
              <a class="dropdown-item" href="#">
                <span class="flag flag-country-ua me-2"></span>
                <span class="nav-link-title">
                  {{ __('Ukrajinské dokumenty') }}
                </span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'standardy' ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Přehled standadů nemocnice">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              @foreach ($categories as $category)
              <a class="dropdown-item {{ request()->segment(2) == $category->folder_name }}' ? 'active' : '' }}" href="{{ route('standardy.'. $category->folder_name.'', $category->id) }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  {!! $category->svg_icon !!}
                </span>
                <span class="nav-link-title">
                  {{ $category->category_name }}
                </span>
                <span class="badge badge-sm bg-{{ $category->color }}-lt text-uppercase ms-auto">{{ $category->documents->count() }}</span>
              </a>
              @endforeach
            </div>
          </li>
          <li class="nav-item dropdown {{ request()->segment(1) == 'media' ? 'active' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Radio, Video, Překladatelé...">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg class="icon icon-tabler icon-tabler-device-tv-old text-lime" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                     stroke-width="21" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item{{ request()->segment(2) == 'radio' ? 'active' : '' }}" href="{{ route('media.radio') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-radio text-orange" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5">
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
                <a class="dropdown-item {{ request()->segment(2) == 'videa' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-movie text-blue" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item {{ request()->segment(2) == 'prekladatele' ? 'active' : '' }}" href="{{ route('media.prekladatele') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language nav-link-icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                  <a class="dropdown-item dropdown-toggle show" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button"
                     aria-expanded="true">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon icon-tabler icon-tabler-pill text-lime" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path>
                          <line x1="8.5" y1="8.5" x2="15.5" y2="15.5"></line>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Lekis
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-flame-off text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M8.973 8.974c-.335 .378 -.67 .716 -.973 1.026c-1.226 1.26 -2 3.24 -2 5a6 6 0 0 0 11.472 2.466m.383 -3.597c-.32 -1.409 -1.122 -3.045 -1.855 -3.869c-.281 .472 -.543 .87 -.79 1.202m-2.358 -2.35c-.068 -2.157 -1.182 -4.184 -1.852 -4.852c0 .968 -.18 1.801 -.465 2.527"></path>
                          <path d="M3 3l18 18"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        BOZP
                      </span>
                    </a>
                  </div>
                </div>
                {{-- <div class="dropend">
                  <a class="dropdown-item dropdown-toggle show" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button"
                     aria-expanded="true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language nav-link-icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 5h7"></path>
                      <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
                      <path d="M5 9c-.003 2.144 2.952 3.908 6.7 4"></path>
                      <path d="M12 20l4 -9l4 9"></path>
                      <path d="M19.1 18h-6.2"></path>
                    </svg>
                    <span class="nav-link-title">
                      {{ __('Překladatelé') }}
                    </span>
                  </a>
                  <div class="dropdown-menu show" data-bs-popper="static">
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="flag flag-country-pl me-2"></span>
                      <span class="nav-link-title">
                        Polština
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="flag flag-country-gb me-2"></span>
                      <span class="nav-link-title">
                        Angličtina
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="flag flag-country-de me-2"></span>
                      <span class="nav-link-title">
                        Němčina
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="flag flag-country-fr me-2"></span>
                      <span class="nav-link-title">
                        Francouština
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'lekis' ? 'active' : '' }}" href="{{ route('media.videa') }}">
                      <span class="flag flag-country-ua me-2"></span>
                      <span class="nav-link-title">
                        Ukrajinština
                      </span>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
          </li>
        </ul>
        <div class="my-2">
          @yield('searchbar')
          {{-- <form action="." method="get">
            <div class="input-icon">
              <span class="input-icon-addon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <circle cx="10" cy="10" r="7" />
                  <line x1="21" y1="21" x2="15" y2="15" />
                </svg>
              </span>
              <input class="form-control" type="text" aria-label="Search in website" placeholder="Hledej ...">
            </div>
          </form> --}}
        </div>
        @yield('buttons')
      </div>
    </div>
  </div>
</div>
