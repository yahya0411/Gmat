<?php

use App\Livewire\AtComponent;
use App\Livewire\EmsComponent;
use App\Livewire\MobilisComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpController;
use App\Http\Controllers\DashboardController;
use App\Livewire\BpComponent;
use App\Livewire\CommercantComponent;
use App\Livewire\ArrivageComponent;
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

// Etablissement
Route::get('bureau',BpComponent::class);
Route::get('at',AtComponent::class);

// client
Route::get('mobilis',MobilisComponent::class);
Route::get('ems',EmsComponent::class);
Route::get('sntf',\App\Livewire\SntfComponent::class);
// Materiel
Route::get('arrivage',ArrivageComponent::class);

Route::get('/',function() {

    return view('load');

    });

Route::get('arr/{id}',function() {

    //dd($id);
  return view('livewire.commercants-component')->layout('livewire.layouts.base');

})->name('arr');
