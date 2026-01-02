<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

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
    return view('Welcome');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/icon', [UserController::class, 'icon'])->name('admin.icon');
    Route::get('admin/map', [UserController::class, 'map'])->name('admin.map');
    Route::get('admin/profile', [UserController::class, 'profile'])->name('admin.profile');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('admin/profile', [UserController::class, 'profile'])->name('admin.profile');
Route::get('index', [UserController::class, 'index'])->name('index');
Route::get('createPage', [UserController::class, 'createPage'])->name('createPage');
////insert category
Route::post('create', [UserController::class,'create'])->name('create');
Route::get('list', [UserController::class,'list'])->name('list');
Route::get('edit/{id}', [UserController::class, 'showData'])->name('edit');
Route::put('update/{id}',[UserController::class,'update'])->name('update');
Route::get('del/{id}', [UserController::class, 'category_delete'])->name('category_delete');



Route::post('createuser', [UserController::class,'createUser'])->name('createUser');
///brands code
Route::get('Admin/create/Brand', [BrandController::class,'createPage'])->name('create_brand');
Route::post('Admin/create/brand', [BrandController::class,'create'])->name('create.brand');
Route::get('Admin/brand/list', [BrandController::class,'brand_list'])->name('brand_list');
Route::get('edit_brand/{id}', [BrandController::class,'show_brand'])->name('edit_brand');
Route::put('brand_update/{id}',[BrandController::class,'update_brand'])->name('brand_update');
Route::get('deleted/{id}',[BrandController::class,'delete_brand'])->name('delete_brand');
///product code
Route::get('Admin/product/list', [ProductController::class,'product_list'])->name('product_list');
Route::get('Admin/product/create', [ProductController::class,'create_Page'])->name('create_Page');
Route::post('Admin/product/create/product', [ProductController::class,'create_product'])->name('create_product');
Route::get('edit_product/{id}', [ProductController::class,'show_product'])->name('edit_product');
Route::put('product_update/{id}',[ProductController::class,'update_product'])->name('update_product');
Route::get('delete/{id}',[ProductController::class,'delete_product'])->name('delete_product');

//cart code
Route::get('admin/cart/{id}', [CartController::class, 'index_cart'])->name('admin.cart');
Route::get('admin/add/cart', [CartController::class, 'add_cart'])->name('admin.add.cart');






