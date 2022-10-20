<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\ShowCategoryController;
use App\Models\ShowCategory;
use App\Http\Controllers\ProductController;

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
});



// Route::middleware(['auth', 'status'])->group( function(){
//     Route::resource(name:'/set_page', controller: WelcomeImageController::class);
// });



Route::get('/', function () {
    return view('main.home');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

 route::get('/redirect', [HomeController::class, 'redirect']);

require __DIR__.'/auth.php';


