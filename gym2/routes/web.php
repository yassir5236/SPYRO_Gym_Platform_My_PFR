


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaticController;



use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trainers.profile', function () {
    return view('trainers.profile');
});

// routes pour l'authentification


//users routes

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');









//client routes
Route::post('/profile', [ClientController::class, 'store'])->name('profile.store');



Route::get('/profile', [ClientController::class, 'showProfileForm'])->name('clients.showProfileForm');




//static pages 

Route::get('/about', [StaticController::class, 'showAbout'])->name('about');
Route::get('/contact', [StaticController::class, 'showContact'])->name('showContact');

