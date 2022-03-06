<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('home', [HomeController::class,'index'])->middleware(['auth'])->name('home');
Route::resource('user', UserController::class)->shallow()->middleware(['auth']);
Route::resource('product', ProductController::class)->shallow()->middleware(['auth']);
Route::resource('category', CategorieController::class)->shallow()->middleware(['auth']);
Route::get('/category/{category:slug}', function(Category $category){
    return view('slug',[
        'products' => $category->products,
        'image' =>$category->image,
        'category' => $category->name,
    ]);
});
require __DIR__.'/auth.php';
