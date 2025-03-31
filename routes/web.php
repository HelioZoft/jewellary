<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\User\Home;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Dashboard;


// User Route
Route::get('/', Home::class)->name('userhome');


Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
});
