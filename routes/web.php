<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PersonController::class, 'index'])->name('index');
Route::post('/persons/store', [\App\Http\Controllers\PersonController::class, 'store'])->name('persons.store');
Route::delete('/persons/destroy/{person}', [\App\Http\Controllers\PersonController::class, 'destroy'])->name('persons.destroy');
