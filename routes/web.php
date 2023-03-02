<?php

use App\Http\Controllers\AdverseventController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaintController;
use Illuminate\Support\Facades\Route;


// Index page
Route::get('/', function () {
    return view('home', ['pretitle' => 'Intranet', 'title' => 'Index', 'position' => 0]);
})->name('index');                                                                                                          // Index route

// Home page
Route::get('home', function () {
    return view('home', ['pretitle' => 'Intranet', 'title' => 'Homepage', 'position' => 0]);
})->name('home');                                                                                                           // Home route

// Oznámení
Route::prefix('oznameni')->name('oznameni.')->group(function () {
    Route::get('prehledy', [PageController::class, 'prehledy'])->name('prehledy');                                          // Přehledy
    Route::get('zmeny-standardu', [PageController::class, 'zmenyStandardu'])->name('zmeny-standardu');                      // Změny standardů
    Route::get('zmeny-v-dokumentaci', [PageController::class, 'zmenyDokumentu'])->name('zmeny-v-dokumentaci');              // Změny dokumentů
    Route::get('akord', [PageController::class, 'akord'])->name('akord');                                                   // Akord
    Route::get('servis', [PageController::class, 'servis'])->name('servis');                                                // Servis
    Route::get('seminare', [PageController::class, 'seminare'])->name('seminare');                                          // Semináře
    Route::get('sluzby', [PageController::class, 'sluzby'])->name('sluzby');                                                // Služby
    Route::get('informace', [PageController::class, 'informace'])->name('informace');                                       // Informace
    Route::get('kultura', [PageController::class, 'kultura'])->name('kultura');                                             // Kultura
});

// Stravování
Route::prefix('stravovani')->name('stravovani.')->group(function () {
    Route::get('obedy', [PageController::class, 'obedy'])->name('obedy');                                                   // Obědy
    Route::get('kantyna', [PageController::class, 'kantyna'])->name('kantyna');                                             // Kantýna
});

// Dokumenty
Route::prefix('dokumenty')->name('dokumenty.')->group(function () {
    Route::get('personalni/{id}', [PageController::class, 'document'])->name('personalni');
    Route::get('sesterska/{id}', [PageController::class, 'document'])->name('sesterska');
    Route::get('hygiena/{id}', [PageController::class, 'document'])->name('hygiena');
    Route::get('pacient/{id}', [PageController::class, 'document'])->name('pacient');
    Route::get('okb/{id}', [PageController::class, 'document'])->name('okb');
    Route::get('rdg/{id}', [PageController::class, 'document'])->name('rdg');
    Route::get('it/{id}', [PageController::class, 'document'])->name('it');
    Route::get('kpr/{id}', [PageController::class, 'document'])->name('kpr');
    Route::get('komunikacni-karty/{id}', [PageController::class, 'document'])->name('komunikacni-karty');
    Route::get('vyhodnoceni-dotazniku/{id}', [PageController::class, 'document'])->name('vyhodnoceni-dotazniku');
    Route::get('navody/{id}', [PageController::class, 'document'])->name('navody');
    Route::get('ukrajinske-dokumenty/{id}', [PageController::class, 'document'])->name('ukrajinske-dokumenty');

    Route::get('dokument-search', [DocumentController::class, 'documentSearch'])->name('dokument.search');                  // Vyhledávání dokumentů
    Route::get('dokument/{id}', [FileController::class, 'documentDownload'])->name('download');                             // Download dokumentu
    Route::get('dokument/addon/{id}', [FileController::class, 'documentAddonDownload'])->name('dokument.addon');            // Addon documentu
});

// Standardy
Route::prefix('standardy')->name('standardy.')->group(function () {
    Route::get('akreditacni/{id}', [PageController::class, 'akreditacni'])->name('akreditacni');                            // Akreditační standardy route (standardy.akreditacni)
    Route::get('osetrovatelske/{id}', [PageController::class, 'standard'])->name('osetrovatelske');                         // Ošetřovatelské standardy route (standardy.osetrovatelske)
    Route::get('lecebne/{id}', [PageController::class, 'standard'])->name('lecebne');                                       // Léčebné standardy route (standardy.lecebne)
    Route::get('specialni/{id}', [PageController::class, 'standard'])->name('specialni');                                   // Speciální standardy route (standardy.specialni)
    Route::get('operacni/{id}', [PageController::class, 'standard'])->name('operacni');                                     // Operační standardy route (standardy.operacni)
    Route::get('anesteziologicke/{id}', [PageController::class, 'standard'])->name('anesteziologicke');                     // Anesteziologické standardy route (standardy.anesteziologicke)
    Route::get('rdg/{id}', [PageController::class, 'standard'])->name('rdg');                                               // RDG standardy route (standardy.rdg)
    Route::get('rehabilitacni/{id}', [PageController::class, 'standard'])->name('rehabilitacni');                           // Rehabilitační standardy route (standardy.rehabilitacni)
    Route::get('opl/{id}', [PageController::class, 'standard'])->name('opl');                                               // OPL standardy route (standardy.opl)
    Route::get('okb/{id}', [PageController::class, 'standard'])->name('okb');                                               // OKB standardy route (standardy.okb)
    Route::get('logopedicke/{id}', [PageController::class, 'standard'])->name('logopedicke');                               // Logopedické standardy route (standardy.logopedicke)
    Route::get('legislativni/{id}', [PageController::class, 'standard'])->name('legislativni');                             // Legislativní standardy route (standardy.legislativni)
    Route::get('standard-search', [DocumentController::class, 'documentSearch'])->name('standard.search');                  // Vyhledávání dokumentů
});

// BOZP - PO
Route::prefix('bozp')->name('bozp.')->group(function () {
    Route::get('bezpecnostni-plany/{id}', [PageController::class, 'bezpecnostniPlany'])->name('bezpecnostni-plany');                            // Bezpečnostní plány (bozp.bezpecnostni-plany)
    Route::get('organizacni-smernice/{id}', [PageController::class, 'organizacniSmernice'])->name('organizacni-smernice');                      // Organizační směrnice (bozp.organizacni-smernice)
    Route::get('metodiky-skoleni/{id}', [PageController::class, 'metodikySkoleni'])->name('metodiky-skoleni');                                  // Metodiky školení (bozp.metodiky-skoleni)
    Route::get('prezencni-listiny/{id}', [PageController::class, 'metodikySkoleni'])->name('prezencni-listiny');                                // Prezenční listiny (bozp.prezencni-listiny)
    Route::get('pracovni-urazy/{id}', [PageController::class, 'pracovniUrazy'])->name('pracovni-urazy');                                        // Pracovní úrazy (bozp.pracovni-urazy)
    Route::get('bezpecnostni-znaceni/{id}', [PageController::class, 'pracovniUrazy'])->name('bezpecnostni-znaceni');                            // Bezpečnostní značení (bozp.bezpecnostni-znaceni)
    Route::get('proverky-kontroly/{id}', [PageController::class, 'proverkyKontroly'])->name('proverky-kontroly');                               // Prověrky - kontroly (bozp.proverky-kontroly)
    Route::get('provozne-bezpecnostni-predpisy/{id}', [PageController::class, 'proverkyKontroly'])->name('provozne-bezpecnostni-predpisy');     // Provozně bezpečnostní předpisy (bozp.provozne-bezpecnostni-predpisy)
    Route::get('rizika/{id}', [PageController::class, 'rizika'])->name('rizika');                                                               // Rizika (bozp.rizika)
    Route::get('pozarni-ochrana/{id}', [PageController::class, 'pozarniOchrana'])->name('pozarni-ochrana');                                     // Požární ochrana ()bozp.pozarni-ochrana)
    Route::get('pozarni-operativni-karty/{id}', [PageController::class, 'pozarni-operativni-karty'])->name('pozarni-operativni-karty');         // Požární ochrana ()bozp.pozarni-ochrana)
    Route::get('bezpecnostni-listy/{id}', [PageController::class, 'bezpecnostniListy'])->name('bezpecnostni-listy');                            // Požární ochrana ()bozp.pozarni-ochrana)                          
});

// Download Files
Route::prefix('soubory')->name('soubory.')->group(function () {
    Route::get('standard/{id}', [FileController::class, 'standardDownload'])->name('download');
    Route::get('standard/addon/{id}', [FileController::class, 'standardAddonDownload'])->name('download.addon');            // Download standard
});

// Media links
Route::prefix('media')->name('media.')->group(function () {
    Route::get('radio', [PageController::class, 'radio'])->name('radio');                                                   // Radio route (media.radio)
    Route::get('videa', [PageController::class, 'video'])->name('videa');                                                   // Videa route (media.videa)
    Route::get('prekladatele', [PageController::class, 'prekladatele'])->name('prekladatele');                              // Videa route (media.prekladatele)
    Route::get('videa/lekis', [PageController::class, 'videoLekis'])->name('videa-lekis');                                  // Videa route (media.videa.lekis)
    Route::get('videa/bozp', [PageController::class, 'videoBozp'])->name('videa-bozp');                                     // Videa route (media.videa.bozp)
});

// Employees
Route::resource('employees', EmployeeController::class)->except(['update', 'show', 'destroy']);

// Adverse Events
Route::resource('adversevents', AdverseventController::class)->except(['update', 'show', 'destroy']);

// Documents
Route::resource('documents', DocumentController::class);
Route::get('documents/addon/{id}', [DocumentController::class, 'addonShow'])->name('show.addon');

// VCards
Route::get('vcards', [EmployeeController::class, 'vcards'])->name('employees.vcards');
Route::get('search', [EmployeeController::class, 'vcardSearch'])->name('employees.search');

// Auth Routes
Route::group(['middleware' => 'auth'], function () {
    // Employee
    Route::post('employee/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('employee/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    Route::get('employee/destroy-photo/{id}', [EmployeeController::class, 'destroyPhoto'])->name('employee.photo');
    Route::get('export', [EmployeeController::class, 'exportTable'])->name('employees.export');
    Route::get('phonelist', [EmployeeController::class, 'exportPhoneList'])->name('employees.phonelist');
    Route::get('list', [EmployeeController::class, 'exportList'])->name('employees.list');

    // Adverse Events
    Route::post('adversevent/update', [AdverseventController::class, 'update'])->name('adversevent.update');
    Route::get('adversevent/destroy/{id}', [AdverseventController::class, 'destroy'])->name('adversevent.destroy');

    // Document Events
    Route::post('documents/update', [DocumentController::class, 'update'])->name('documents.update');
    Route::get('documents/destroy/{id}', [DocumentController::class, 'destroy']);

    // Paint Events
    Route::post('paints/update', [PaintController::class, 'update'])->name('paint.update');
    Route::get('paints/destroy/{id}', [PaintController::class, 'destroy']);
    // Paint Events
    Route::resource('paints', PaintController::class)->except(['update', 'show', 'destroy']);

    Route::get('user/profile', [PageController::class, 'profile'])->name('user.profile');
});
