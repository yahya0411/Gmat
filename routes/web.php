<?php

use App\Livewire\AtComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpController;
use App\Http\Controllers\DashboardController;
use App\Livewire\BpComponent;
use App\Livewire\CommercantComponent;

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

Route::get('commercant',CommercantComponent::class);
Route::get('dashboard',\App\Livewire\DashboardComponent::class);


Route::get('bureau',BpComponent::class);
Route::get('at',AtComponent::class);

Route::get('/',function() {

    return view('load');

    });
