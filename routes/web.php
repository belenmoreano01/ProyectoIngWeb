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
Route::resource('pases', \App\Http\Controllers\PaseController::class);
Route::resource('personas', \App\Http\Controllers\PersonaController::class);
Route::resource('usos', \App\Http\Controllers\UsoController::class);
Route::resource('tipos', \App\Http\Controllers\TipoController::class);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
