<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::livewire('/', 'welcome');
Route::livewire('/', 'pages::guest.landing')->name('guest.landing');
Route::livewire('/pricing', 'pages::guest.pricing')->name('guest.pricing');
