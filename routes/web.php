<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
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
use App\Livewire\Admin\Staff;
use App\Livewire\Admin\StaffList;
use App\Livewire\User\Carrer;

// User Route
Route::get('/', Home::class)->name('userhome');
Route::get('/about', About::class)->name('about');
Route::get('/internship', Service::class)->name('intern');
Route::get('/main-events', Event::class)->name('events');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/carrer', Carrer::class)->name('carrer'); 

Route::get('/download-agreement', function () {
    $filePath = public_path('agreement.pdf');
    return Response::download($filePath, 'agreement.pdf');
})->name('download.agreement');

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
    Route::get('/awards', AwardsList::class)->name('all-awards');
    Route::get('/add-awards', Awards::class)->name('add-awards');
    Route::get('/edit-awards/{id}', Awards::class)->name('edit-awards');
    Route::get('/events', EventsList::class)->name('all-events');
    Route::get('/add-events', Events::class)->name('add-events');
    Route::get('/edit-events/{id}', Events::class)->name('edit-events');
    Route::get('/staff', StaffList::class)->name('staff');
    Route::get('/add-staff', Staff::class)->name('add-staff');
    Route::get('/edit-staff/{id}',  Staff::class)->name('edit-staff');
});
