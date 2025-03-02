<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EventController;

// Home Page
Route::get('/', function () {
    return view('index');
})->name('home');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Event Management (Admin CRUD)
Route::get('/admin/events', [EventController::class, 'index'])->name('event.list');
Route::get('/admin/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('/admin/event/store', [EventController::class, 'store'])->name('event.store');
Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::put('/admin/event/update/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('event.delete');


// Student Routes
Route::get('/student/register', [StudentController::class, 'registrationPage'])->name('student.register');
Route::post('/student/register', [StudentController::class, 'store'])->name('student.register.submit');


// View Events (For Students)
Route::get('/events', [EventController::class, 'viewEvents'])->name('events.view');

// Admin Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
