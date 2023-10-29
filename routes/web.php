<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('startpage');
});

Route::get('game', function () {
    return view('game', [
    //'product' => '<h1>hello world</h1>'
    ]);
});

Route::get('products', function () {
    $products = Product::query();

    if (request('search')) {
        $products->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('genre', 'like', '%' . request('search') . '%');
    }

    if (request('category')) {
        $products->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('genre', 'like', '%' . request('search') . '%');
    }

    $products = $products->get();

    return view('products.index', ['products' => $products]);
})->name('product.index');

Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products', [ProductController::class, 'store'])->name('product.store');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');

Route::get('admin/products/create', [ProductController::class, 'create'])->name('product.create');
























Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products/category/{categoryId}');


