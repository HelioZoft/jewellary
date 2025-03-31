<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\User\Home;
use App\Livewire\User\About;
use App\Livewire\User\Service;
use App\Livewire\User\Event;
use App\Livewire\User\Contact;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\Dashboard;


// User Route
Route::get('/', Home::class)->name('userhome');
Route::get('/about', About::class)->name('about');
Route::get('/service', Service::class)->name('service');
Route::get('/events', Event::class)->name('events');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
});
