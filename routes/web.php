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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('admin', MenuController::class);

// Route::controller(WelcomeImageController::class)->group(function () {
//     Route::get('/admin/edi/edit_hero', 'Hero')->name('edit_hero');
//     Route::post('update/hero', 'UpdateHero')->name('update_hero');
// });

Route::middleware([ 'status'])->group( function(){
    Route::resource(name:'set_page', controller: HomeViewController::class);
    Route::resource(name: '/show_category', controller: ShowCategoryController::class);
    Route::resource(name: '/products', controller: ProductController::class);
    // Route::resource(name: '/checkout', controller: CheckoutController::class);
    // Route::resource(name: '/shop', controller: ShopController::class);
});
// Route::resource(name: '/checkout', controller: CheckoutController::class)->middleware('auth');
Route::get('checkout/{id}', [\App\Http\Controllers\CheckoutController::class, 'show'])->middleware(['auth'])->name('checkout');
Route::post('checkout/{id}', [\App\Http\Controllers\CheckoutController::class, 'store'])->middleware('auth')->name('confirm');
Route::resource(name: '/shop', controller: ShopController::class);

Route::get('search', [\App\Http\Controllers\ProductController::class, 'search'])->name('search');

//order
Route::get('orders', [\App\Http\Controllers\OrdersController::class, 'index'])->name('orders');
Route::get('order', [\App\Http\Controllers\OrdersController::class, 'show'])->name('order');

//paystack
Route::get('verify-payment/{refrence}', [\App\Http\Controllers\CheckoutController::class, 'verify'])->name('verify');
Route::post('order/{response}', [\App\Http\Controllers\CheckoutController::class, 'save_order'])->name('order');
// Route::get('call_back', [\App\Http\Controllers\CheckoutController::class, 'callback'])->name('back');

//profile
Route::middleware(['auth'])->group(function (){
Route::get('profile', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'show'])->name('profile');
Route::get('edit_profile', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'edit'])->name('edit_profile');
Route::post('update_profile', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'update'])->name('update_profile');
Route::get('update_password', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'edit_password'])->name('edit_password');
Route::post('update_password', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'update_password'])->name('change_password');
});


Route::get('/', function () {

    return redirect()->route('redirect') ;
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

require __DIR__.'/auth.php';


