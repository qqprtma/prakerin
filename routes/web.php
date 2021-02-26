<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\FrontendController;


// Route::get('/',[FrontendController::class, 'index']);
Route::get('/', 'App\Http\Controllers\FrontendController@index');

Auth::routes();



Route::group(['prefix' => 'admin', 'midlleware' => ['auth']], function () {
    Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->name('admin');
    Route::resource('provinsi', ProvinsiController::class);
    Route::resource('kota',KotaController::class);
    Route::resource('kecamatan',KecamatanController::class);
    Route::resource('kelurahan',KelurahanController::class);
    Route::resource('rw',RwController::class);
    Route::resource('tracking',TrackingController::class);

});

