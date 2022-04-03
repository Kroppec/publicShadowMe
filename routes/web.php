<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

Route::post('/testupload', [Controller::class, 'testupload']);
Route::post('/submitForm', [Controller::class, 'submitForm']);

Route::get('/dashboard', [Controller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
