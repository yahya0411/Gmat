<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpController;
use App\Http\Controllers\DashboardController;
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

Route::get('/materiel', function () {
    return view('materiel.index');
})->name('materiel');

Route::resource('bureau',BpController::class);
Route::resource('dashboard',DashboardController::class);
