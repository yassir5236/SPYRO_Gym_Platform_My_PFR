
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
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;









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
Route::get('/coach', [CoachController::class, 'showClientsWithCoaches'])->name('showClientsWithCoaches');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');












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
Route::get('/admin/coaches', [CoachController::class, 'adminCoaches'])->name('adminCoaches');
Route::post('/assign-coaches', [AdminController::class, 'assignCoach'])->name('admin.assignCoach');



// routes/web.php
// Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/subscription-requests', [SubscriptionController::class, 'showSubscriptionRequests'])->name('admin.subscription-requests.index');
    Route::post('/admin/subscription-requests/{subscriptionRequest}/approve', [SubscriptionController::class, 'approve'])->name('subscription-requests.approve');
    Route::post('/admin/subscription-requests/{subscriptionRequest}/reject', [SubscriptionController::class, 'reject'])->name('subscription-requests.reject');

    Route::get('/admin/statistics', [AdminController::class, 'getStatistics'])->name('admin.getStatistics');

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
Route::get('/subscription', [StaticController::class, 'showSubscription'])->name('subscription');

Route::get('/', [StaticController::class, 'showWelcome'])->name('showWelcome');





// coach routes

Route::get('/dashboard_coach',[CoachController::class,'dashboard'])->name('coach.dashboard_coach');
Route::get('/trainers',[CoachController::class,'showtrainers'])->name('showtrainers');
Route::get('/coach/specialization',[CoachController::class,'Profile'])->name('coach.Profile.form');
Route::post('/coach/specialization/submit',[CoachController::class,'saveSpecialization'])->name('coach.specialization.submit');

Route::get('/coach/statistics',[CoachController::class,'getStatistics'])->name('coach.statistics');

Route::delete('/posts/{post}/admin-delete',[PostController::class,'adminDelete'])->name('posts.admin-delete');

Route::post('/posts/search',[PostController::class,'search'])->name('posts.search');






Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');







Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);



// Routes pour les produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/clients/index', [ProductController::class, 'indexProductClient'])->name('indexProductClient');




Route::post('/products/filter', [ProductController::class, 'indexProductClient2'])->name('filter.products');





Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');
Route::post('/products/search', [ProductController::class, 'searchProductClient'])->name('searchProductClient');



// Routes pour les catégories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');





// cart ROUTE
Route::post('/cart/add/{product}', [CartController::class,'add'])->name('cart.add');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/panier', [CartController::class,'panier'])->name('clients.product.panier');
Route::post('/cart/remove/{id}', [CartController::class,'remove'])->name('cart.remove');
// Route::patch('/cart/update/{id}', [CartController::class,'updateQuantity'])->name('cart.update');
Route::patch('/cart/update/{id}', [CartController::class,'update'])->name('cart.update');
Route::post('/checkout/confirm', [CartController::class, 'confirmPurchase'])->name('checkout.confirm');


// Route::patch('/cart/update/{id}', 'CartController@update')->name('cart.update');



// Route::post('/cart/add/', [CartController::class,'addToCart'])->name('addToCart');
// Route::post('/cart/add/{product}', 'CartController@add')->name('cart.add');

// Route::post('/cart/add', 'CartController@addToCart')->name('cart.add');
