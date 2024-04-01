


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriptionController;





use GuzzleHttp\Middleware;



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
Route::get('/pricing', [ClientController::class, 'showPricing'])->name('showPricing');
Route::get('/produts', [ClientController::class, 'showProducts'])->name('showProducts');
Route::get('/profile', [ClientController::class, 'showProfileForm'])->name('clients.showProfileForm');


//admin routes
Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');

Route::get('/subscriptions/display', [SubscriptionController::class, 'showPricing'])->name('admin.showPricing');
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('admin.subscriptions.index');
Route::get('/subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
Route::get('/subscriptions/{subscription}', [SubscriptionController::class, 'show'])->name('subscriptions.show');
Route::get('/subscriptions/{subscription}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
Route::put('/subscriptions/{subscription}', [SubscriptionController::class, 'update'])->name('subscriptions.update');
Route::delete('/subscriptions/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');


//static pages 

Route::get('/about', [StaticController::class, 'showAbout'])->name('about');
Route::get('/contact', [StaticController::class, 'showContact'])->name('showContact');
Route::get('/galery', [StaticController::class, 'showGalery'])->name('showGalery');
Route::get('/', [StaticController::class, 'showWelcome'])->name('showWelcome');



