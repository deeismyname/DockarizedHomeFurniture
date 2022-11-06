<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\ShowCategoryController;
use App\Models\ShowCategory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;

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

Route::middleware(['auth', 'status'])->group( function(){
    Route::resource(name:'/set_page', controller: HomeViewController::class);
    Route::resource(name: '/show_category', controller: ShowCategoryController::class);
    Route::resource(name: '/products', controller: ProductController::class);
    // Route::resource(name: '/checkout', controller: CheckoutController::class);
    // Route::resource(name: '/shop', controller: ShopController::class);
});
// Route::resource(name: '/checkout', controller: CheckoutController::class)->middleware('auth');
Route::get('checkout/{id}', [\App\Http\Controllers\CheckoutController::class, 'show'])->middleware('auth')->name('checkout');
Route::post('checkout/{id}', [\App\Http\Controllers\CheckoutController::class, 'store'])->middleware('auth')->name('confirm');
Route::resource(name: '/shop', controller: ShopController::class);




// Route::middleware(['auth', 'status'])->group( function(){
//     Route::resource(name:'/set_page', controller: WelcomeImageController::class);
// });


Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])->name('payment');




Route::get('/', function () {
    return view('main.home');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

 route::get('/redirect', [HomeController::class, 'redirect']);

require __DIR__.'/auth.php';


