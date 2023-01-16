<?php

use App\Http\Controllers\AdverseventController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;


// Test page
Route::get('test', function () {
    return view('test', ['category' => 'Test', 'title' => 'Pokus']);                                        // Testing route
});

// Index
Route::get('/', function () {
    return view('test', ['category' => 'Intranet', 'title' => 'Index']);                                   // Index route
});

// Home page
Route::get('home', [PageController::class, 'home'])->name('home');                                          // Home route

// Oznámení
Route::prefix('oznameni')->name('oznameni.')->group(function () {
    Route::get('prehledy', [PageController::class, 'prehledy'])->name('prehledy');                          // Přehledy route
    Route::get('zmeny', [PageController::class, 'zmeny'])->name('zmeny-standardu');                         // Změny route
    Route::get('akord', [PageController::class, 'akord'])->name('akord');                                   // Akord route
    Route::get('servis', [PageController::class, 'servis'])->name('servis');                                // Servis route
    Route::get('seminare', [PageController::class, 'seminare'])->name('seminare');                          // Semináře route
    Route::get('sluzby', [PageController::class, 'sluzby'])->name('sluzby');                                // Služby route
    Route::get('informace', [PageController::class, 'informace'])->name('informace');                       // Informace route
    Route::get('kultura', [PageController::class, 'kultura'])->name('kultura');                             // Kultura route
});

// Stravování
Route::prefix('stravovani')->name('stravovani.')->group(function () {
    Route::get('obedy', [PageController::class, 'obedy'])->name('obedy');                                   // Akreditační standardy route
    Route::get('kantyna', [PageController::class, 'kantyna'])->name('kantyna');                             // Akreditační standardy route
});

// Standardy
Route::prefix('standardy')->name('standardy.')->group(function () {
    Route::get('akreditacni/{id}', [PageController::class, 'akreditacni'])->name('akreditacni');            // Akreditační standardy route
    Route::get('osetrovatelske/{id}', [PageController::class, 'standard'])->name('osetrovatelske');         // Ošetřovatelské standardy route
    Route::get('lecebne/{id}', [PageController::class, 'standard'])->name('lecebne');                       // Léčebné standardy route
    Route::get('specialni/{id}', [PageController::class, 'standard'])->name('specialni');                   // Speciální standardy route
    Route::get('operacni/{id}', [PageController::class, 'standard'])->name('operacni');                     // Operační standardy route
    Route::get('anesteziologicke/{id}', [PageController::class, 'standard'])->name('anesteziologicke');     // Anesteziologické standardy route
    Route::get('rdg/{id}', [PageController::class, 'standard'])->name('rdg');                               // RDG standardy route
    Route::get('rehabilitacni/{id}', [PageController::class, 'standard'])->name('rehabilitacni');           // Rehabilitační standardy route
    Route::get('opl/{id}', [PageController::class, 'standard'])->name('opl');                               // Akreditační standardy route
    Route::get('okb/{id}', [PageController::class, 'standard'])->name('okb');                               // OKB standardy route
    Route::get('logopedicke/{id}', [PageController::class, 'standard'])->name('logopedicke');               // Logopedické standardy route
    Route::get('legislativni/{id}', [PageController::class, 'standard'])->name('legislativni');             // Legislativní standardy route
    Route::get('standard-search', [DocumentController::class, 'standardSearch'])->name('standard.search');  // Vyhledávání dokumentů route
});

// Download
Route::get('download/{id}', [FileController::class, 'download'])->name('download');

// Media
Route::prefix('media')->name('media.')->group(function () {
    Route::get('radio', [PageController::class, 'radio'])->name('radio');                                   // Radio route
    Route::get('videa', [PageController::class, 'video'])->name('videa');                                   // Videa route
});

// Attendace
Route::resource('slides', SlideController::class);
Route::resource('train', TrainingController::class);
Route::resource('attendances', AttendanceController::class);

// Employees
Route::resource('employees', EmployeeController::class)->except(['update', 'show', 'destroy']);

// Adverse Events
Route::resource('adversevents', AdverseventController::class)->except(['update', 'show', 'destroy']);

// Documents
Route::resource('documents', DocumentController::class);

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

    // Evidence
    Route::resource('evidences', EvidenceController::class);
    Route::post('evidences/update', [EvidenceController::class, 'update'])->name('evidences.update');
    Route::get('evidences/destroy/{id}', [EvidenceController::class, 'destroy']);
});
