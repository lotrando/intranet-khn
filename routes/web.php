<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AdverseventController;
use App\Http\Controllers\AddonController;


// Index page
Route::get('/', [PageController::class, 'home'])->name('index');                                                                                                          // Index route

// Home page
Route::get('home', [PageController::class, 'home'])->name('home');                                                                                                           // Home route

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
});

// Standardy
Route::prefix('standardy')->name('standardy.')->group(function () {
    // Akreditační standardy
    Route::get('akreditacni/{id}', [PageController::class, 'akreditacni'])->name('akreditacni');
    // Ošetřovatelské standardy                    
    Route::get('osetrovatelske/{id}', [PageController::class, 'standard'])->name('osetrovatelske');
    // Léčebné standardy                 
    Route::get('lecebne/{id}', [PageController::class, 'standard'])->name('lecebne');
    // Speciální standardy    
    Route::get('specialni/{id}', [PageController::class, 'standard'])->name('specialni');
    // Operační standardy                      
    Route::get('operacni/{id}', [PageController::class, 'standard'])->name('operacni');
    // Anesteziologické standardy                           
    Route::get('anesteziologicke/{id}', [PageController::class, 'standard'])->name('anesteziologicke');
    // RDG standardy 
    Route::get('rdg/{id}', [PageController::class, 'standard'])->name('rdg');
    // Rehabilitační standardy
    Route::get('rehabilitacni/{id}', [PageController::class, 'standard'])->name('rehabilitacni');
    // OPL standardy                    
    Route::get('opl/{id}', [PageController::class, 'standard'])->name('opl');
    // OKB standardy                                        
    Route::get('okb/{id}', [PageController::class, 'standard'])->name('okb');
    // Logopedické standardy
    Route::get('logopedicke/{id}', [PageController::class, 'standard'])->name('logopedicke');
    // Legislativní standardy                 
    Route::get('legislativni/{id}', [PageController::class, 'standard'])->name('legislativni');
    // Vyhledávání dokumentů
    Route::get('standard-search', [DocumentController::class, 'documentSearch'])->name('standard.search');
});

// BOZP - PO
Route::prefix('bozp')->name('bozp.')->group(function () {
    // Bezpečnostní plány
    Route::get('bezpecnostni-plany/{id}', [PageController::class, 'bozp'])->name('bezpecnostni-plany');
    // Organizační směrnice                          
    Route::get('organizacni-smernice/{id}', [PageController::class, 'bozp'])->name('organizacni-smernice');
    // Metodiky školení                      
    Route::get('metodiky-skoleni/{id}', [PageController::class, 'bozp'])->name('metodiky-skoleni');
    // Prezenční listiny                        
    Route::get('prezencni-listiny/{id}', [PageController::class, 'bozp'])->name('prezencni-listiny');
    // Pracovní úrazy                       
    Route::get('pracovni-urazy/{id}', [PageController::class, 'bozp'])->name('pracovni-urazy');
    // Bezpečnostní značení                                  
    Route::get('bezpecnostni-znaceni/{id}', [PageController::class, 'bozp'])->name('bezpecnostni-znaceni');
    // Prověrky - kontroly                      
    Route::get('proverky-kontroly/{id}', [PageController::class, 'bozp'])->name('proverky-kontroly');
    // Provozně bezpečnostní předpisy
    Route::get('provozne-bezpecnostni-predpisy/{id}', [PageController::class, 'bozp'])->name('provozne-bezpecnostni-predpisy');
    // Rizika
    Route::get('rizika/{id}', [PageController::class, 'bozp'])->name('rizika');
    // Požární ochrana
    Route::get('pozarni-ochrana/{id}', [PageController::class, 'bozp'])->name('pozarni-ochrana');
    // Požární operativní karty                                
    Route::get('pozarni-operativni-karty/{id}', [PageController::class, 'bozp'])->name('pozarni-operativni-karty');
    // Bezpečnostní listy
    Route::get('bezpecnostni-listy/{id}', [PageController::class, 'bozp'])->name('bezpecnostni-listy');
});

Route::get('dokument-search', [DocumentController::class, 'documentSearch'])->name('dokument.search');                          // Vyhledávání dokumentů

Route::prefix('soubory')->name('soubory.')->group(function () {

    Route::get('dokument/{id}', [FileController::class, 'documentDownload'])->name('dokument.download');                            // Download dokumentu
    Route::get('dokument/priloha/{id}', [FileController::class, 'documentAddonDownload'])->name('dokument.addon.download');         // Download standard addon

    Route::get('standard/{id}', [FileController::class, 'documentDownload'])->name('standard.download');                            // Download standardu
    Route::get('standard/priloha/{id}', [FileController::class, 'standardAddonDownload'])->name('standard.addon.download');         // Download standardu addon

    Route::get('bozp/{id}', [FileController::class, 'documentDownload'])->name('bozp.download');                                    // Download bozp
    Route::get('bozp/priloha/{id}', [FileController::class, 'standardAddonDownload'])->name('bozp.addon.download');                 // Download bozp addon
});

// Media links
Route::prefix('media')->name('media.')->group(function () {
    Route::get('radio', [PageController::class, 'radio'])->name('radio');                                                           // Radio route (media.radio)
    Route::get('videa', [PageController::class, 'video'])->name('videa');                                                           // Videa route (media.videa)
    Route::get('prekladatele', [PageController::class, 'prekladatele'])->name('prekladatele');                                      // Videa route (media.prekladatele)
    Route::get('videa/lekis', [PageController::class, 'videoLekis'])->name('videa-lekis');                                          // Videa route (media.videa.lekis)
    Route::get('videa/bozp', [PageController::class, 'videoBozp'])->name('videa-bozp');                                             // Videa route (media.videa.bozp)
});

// ZV OS
Route::get('zvos', [PageController::class, 'zvos'])->name('zvos');                                                           

// Employees
Route::resource('employees', EmployeeController::class)->except(['update', 'show', 'destroy']);

// Adverse Events
Route::resource('adversevents', AdverseventController::class)->except(['update', 'show', 'destroy']);

// Documents
Route::resource('documents', DocumentController::class)->except(['update', 'destroy']);
Route::resource('documents/addons', AddonController::class)->except(['update', 'destroy']);

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

    // Document Events
    Route::post('documents/addons/update', [AddonController::class, 'update'])->name('addons.update');
    Route::get('documents/addons/destroy/{id}', [AddonController::class, 'destroy']);

    // Paint Events
    Route::post('paints/update', [PaintController::class, 'update'])->name('paint.update');
    Route::get('paints/destroy/{id}', [PaintController::class, 'destroy']);
    // Paint Events
    Route::resource('paints', PaintController::class)->except(['update', 'show', 'destroy']);

    Route::get('user/profile', [PageController::class, 'profile'])->name('user.profile');
});
