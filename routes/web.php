<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/company-profile', [HomeController::class, 'companyProfile'])->name('company-profile');
Route::get('/mobile-apps', [HomeController::class, 'mobileApps'])->name('mobile-apps');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
