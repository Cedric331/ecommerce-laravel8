<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products-index');

Route::get('/account', function () {
   return view('account');
})->middleware(['auth'])->name('account');

require __DIR__.'/auth.php';


Route::middleware(['admin', 'auth'])->group(function () {

   Route::get('/administration', function () {
      return view('admin.index');
   })->name('admin-index');

   Route::get('/administration/create/product', function () {
      return view('admin.product');
   })->name('product-create');

   Route::post('/administration/create/product', [ProductController::class, 'store']);

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
