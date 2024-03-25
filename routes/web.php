<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpController;
use App\Http\Controllers\DashboardController;
use App\Livewire\BpComponent;
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



Route::get('bureau',BpComponent::class);

Route::get('bps',function() {

return view('livewire.bpd-component');

});
