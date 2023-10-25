<?php

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

Route::get('admin', function () {
    return view('admin');
});

Route::get('listofgames', function () {
    return view('listofgames');
});

Route::get('game', function () {
    return view('game', [
    //'product' => '<h1>hello world</h1>'
    ]);
});

//dd(request('search'))
//Route::get('products', [ProductController::class, 'create']);
//Route::post('products', [ProductController::class, 'store']);

Route::get('products', function () {
    $products = Product::query();

    if (request('search')) {
        $products->where('title', 'like', '%' . request('search') . '%');
    }

    $products = $products->get();

    return view('products.index', ['products' => $products]);
})->name('product.index');

Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products', [ProductController::class, 'store'])->name('product.store');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');


























Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products/category/{categoryId}');


