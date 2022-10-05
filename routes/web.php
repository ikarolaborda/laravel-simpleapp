<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\SeriesController::class, 'index'])->name('main');
Route::get('series/criar', [App\Http\Controllers\SeriesController::class, 'create'])->name('create_new_series');
Route::post('/series/store', [App\Http\Controllers\SeriesController::class, 'store'])->name('add_series');
