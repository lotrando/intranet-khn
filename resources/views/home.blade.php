@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/prehledy.png') }}" rel="shortcut icon">
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
            {{ __($category) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Wrapper End -->

<!-- Page body -->
<div class="page-body">
  <div class="container-fluid">

    <div class="row">

      <div class="col-5 mb-2">
        <div class="card bg-transparent p-6" style="height: 36rem">
          <div class="card-body p-2 card-body-scrollable card-body-scrollable-shadow bg-transparent">
            <div class="divide-y">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card bg-azure-bg shadow-sm">
                    <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
                      <h3 class="text-muted m-0 mb-0 p-0">
                        {{ __('Akord – klávesové zkratky') }}
                      </h3>
                    </div>
                    <div class="card-body p-2">
                      <div class="row">
                        <div class="col-6">
                          <span id="form_result_window"></span>
                        </div>
                      </div>
                      <p class="text-justified">Znalost klávesových zkratek vede k vyšší produktivitě.
                        Nechte se inspirovat</p>
                    </div>
                  </div>
                  <div class="card mb-2 mt-2 shadow-sm">
                    <div class="card-header align-items-center justify-content-between bg-red-lt d-flex">
                      <h3 class="text-muted m-0 mb-0 p-0">
                        {{ __('Aktualizace AKORD') }}
                      </h3>
                    </div>
                    <div class="card-body p-2">
                      <div class="row">
                        <div class="col-6">
                          <span id="form_result_window"></span>
                        </div>
                      </div>
                      <p class="text-justified">

                        21.09. 2022 od 12:00 dojde k aktualizace NIS AKORD. Může docházet k výpadku NIS. Pokud se vám po aktualizaci zobrazí hlášení o starší verzi programu, je nutné
                        spustit
                        ikonu aktualizace Akordu na ploše ručně.

                        Aktualizace opravuje:
                        Inventura skladu

                        Byla opravena chyba ve formuláři Inventury skladu, kdy se chybně zobrazovala položka KOD
                        Infuze

                        Ukončeno se kopíruje při kopírování infuze, která již byla ukončena. Jedná se o chybu, která je opravena
                        Amb.dekurs - kopie předchozí zprávy

                        Ve formuláři ambulantní dekurs přibylo nové tlačítko na dolní liště vnořeného editoru Kopie
                        Jiné druhy léčby
                        Na záložce Jiné druhy léčby ve formuláři Medikací byla dopracována možnost měnit pořadí jednotlivých ordinací - posun pomocí šipek - nahoru a dolů
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
