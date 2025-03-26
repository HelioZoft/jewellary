<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\UserHome;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', UserHome::class)->name('userhome');