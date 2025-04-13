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
use App\Livewire\Admin\Awards;
use App\Livewire\Admin\AwardsList;
use App\Livewire\Admin\Events;
use App\Livewire\Admin\EventsList;

// User Route
Route::get('/', Home::class)->name('userhome');
Route::get('/about', About::class)->name('about');
Route::get('/service', Service::class)->name('service');
Route::get('/main-events', Event::class)->name('events');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
    Route::get('/awards', AwardsList::class)->name('all-awards');
    Route::get('/add-awards', Awards::class)->name('admin.awards');
    Route::get('/edit-awards/{id}', Awards::class)->name('edit-awards');
    Route::get('/events', EventsList::class)->name('all-events');
    Route::get('/add-events', Events::class)->name('admin.events');
    Route::get('/edit-events/{id}', Events::class)->name('edit-events');
});
