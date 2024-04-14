


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\GalleryImageController;
use App\http\Controllers\CoachController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;








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

Route::post('/subscription-requests', [SubscriptionController::class, 'storeRequest'])->name('subscription-requests.storeRequest');
Route::post('/subscription-requests/{subscriptionRequest}/approve', [SubscriptionController::class, 'approve'])->name('subscription-requests.approve');
Route::post('/subscription-requests/{subscriptionRequest}/reject', [SubscriptionController::class, 'reject'])->name('subscription-requests.reject');
Route::get('/subscriptions/test', [SubscriptionController::class, 'index2'])->name('subscriptions.index');

// routes/web.php
// Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/subscription-requests', [SubscriptionController::class, 'showSubscriptionRequests'])->name('admin.subscription-requests.index');
    Route::post('/admin/subscription-requests/{subscriptionRequest}/approve', [SubscriptionController::class, 'approve'])->name('subscription-requests.approve');
    Route::post('/admin/subscription-requests/{subscriptionRequest}/reject', [SubscriptionController::class, 'reject'])->name('subscription-requests.reject');
// });




// galery
Route::get('gallery-images', [GalleryImageController::class, 'index'])->name('gallery-images.index');
Route::get('gallery-images/create', [GalleryImageController::class, 'create'])->name('gallery-images.create');
Route::post('gallery-images', [GalleryImageController::class, 'store'])->name('gallery-images.store');
Route::get('gallery-images/{gallery_image}', [GalleryImageController::class, 'show'])->name('gallery-images.show');
Route::get('gallery-images/{gallery_image}/edit', [GalleryImageController::class, 'edit'])->name('gallery-images.edit');
Route::put('gallery-images/{gallery_image}', [GalleryImageController::class, 'update'])->name('gallery-images.update');
Route::delete('gallery-images/{gallery_image}', [GalleryImageController::class, 'destroy'])->name('gallery-images.destroy');









Route::get('/subscriptions/{subscription}', [SubscriptionController::class, 'show'])->name('subscriptions.show');
Route::get('/subscriptions/{subscription}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
Route::put('/subscriptions/{subscription}', [SubscriptionController::class, 'update'])->name('subscriptions.update');
Route::delete('/subscriptions/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');


//static pages 

Route::get('/about', [StaticController::class, 'showAbout'])->name('about');
Route::get('/contact', [StaticController::class, 'showContact'])->name('showContact');
Route::get('/galery', [StaticController::class, 'showGalery'])->name('showGalery');
Route::get('/', [StaticController::class, 'showWelcome'])->name('showWelcome');





// coach routes

Route::get('/dashboard_coach',[CoachController::class,'dashboard'])->name('coach.dashboard_coach');

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);



// Routes pour les produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');



// Routes pour les catégories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
