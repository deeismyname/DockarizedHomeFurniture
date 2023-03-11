<?php

use App\Models\Product;
use App\Models\ShowCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\ShowCategoryController;
use App\Http\Controllers\WelcomeImageController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\passwordResetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::middleware(['status'])->group(function () {
    Route::resource(name: 'set_page', controller: HomeViewController::class);
    Route::resource(name: '/show_category', controller: ShowCategoryController::class);
    Route::resource(name: '/products', controller: ProductController::class);
});

//shop
Route::resource('/shop', ShopController::class);
Route::get('search', [ProductController::class, 'search'])->name('search');


//profile
Route::middleware(['auth'])->group(function () {

    //order
    Route::get('orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('order', [OrdersController::class, 'show'])->name('order');

    // checkout
    Route::get('checkout/{id}', [CheckoutController::class, 'show'])->name('checkout');
    Route::post('checkout/{id}', [CheckoutController::class, 'store'])->name('confirm');

    // user has to be authenticated before can make payments
    //paystack
    Route::post('/pay', [CheckoutController::class, 'redirectToGateway'])->name('pay');
    Route::get('/payment/callback', [CheckoutController::class, 'handleGatewayCallback']);
    Route::get('/payment/{order_id}/thankyou/', [CheckoutController::class, 'thankyou'])->name('thankyou');

    // Profiles
    Route::get('profile', [RegisteredUserController::class, 'show'])->name('profile');
    Route::get('edit_profile', [RegisteredUserController::class, 'edit'])->name('edit_profile');
    Route::post('update_profile', [RegisteredUserController::class, 'update'])->name('update_profile');
    Route::get('update_password', [passwordResetController::class, 'index'])->name('edit_password');
    Route::post('update_password', [passwordResetController::class, 'changePassword'])->name('change_password');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');


Route::get('/', function () {

    return redirect()->route('redirect');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

require __DIR__ . '/auth.php';
