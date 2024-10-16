<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\FunctionController;
use App\Http\Controllers\UserController;
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


Route::group(['prefix' => 'admin', 'middleware' => 'admin.guest'], function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('admin.login');
    Route::post('/login/process', [AuthenticationController::class, 'loginProcess'])->name('admin.login.process');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin.auth'], function () {
    Route::get('/dashboard', [AuthenticationController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('logout', [AuthenticationController::class, 'adminLogout'])->name('admin.logout');

    Route::get('categories', [FunctionController::class, 'categories'])->name('user.categories');
    Route::get('create/category', [FunctionController::class, 'createCategory'])->name('user.category.create');
    Route::post('save/category', [FunctionController::class, 'saveCategory'])->name('user.category.save');
    Route::get('update/category/{id}', [FunctionController::class, 'updateCategory'])->name('user.category.update');
    Route::post('edit/category/{id}', [FunctionController::class, 'editCategory'])->name('user.category.edit');
    Route::post('delete/category/{id}', [FunctionController::class, 'deleteCategory'])->name('user.category.delete');

    Route::get('products', [FunctionController::class, 'products'])->name('user.products');
    Route::get('create/product', [FunctionController::class, 'createproduct'])->name('user.product.create');
    Route::post('save/product', [FunctionController::class, 'saveproduct'])->name('user.product.save');
    Route::get('update/product/{id}', [FunctionController::class, 'updateproduct'])->name('user.product.update');
    Route::post('edit/product/{id}', [FunctionController::class, 'editproduct'])->name('user.product.edit');
    Route::post('delete/product/{id}', [FunctionController::class, 'deleteproduct'])->name('user.product.delete');

    Route::get('mobiles', [FunctionController::class, 'mobiles'])->name('user.mobiles');
    Route::get('create/mobile', [FunctionController::class, 'createmobile'])->name('user.mobile.create');
    Route::post('save/mobile', [FunctionController::class, 'savemobile'])->name('user.mobile.save');
    Route::get('update/mobile/{id}', [FunctionController::class, 'updatemobile'])->name('user.mobile.update');
    Route::post('edit/mobile/{id}', [FunctionController::class, 'editmobile'])->name('user.mobile.edit');
    Route::post('delete/mobile/{id}', [FunctionController::class, 'deletemobile'])->name('user.mobile.delete');

    Route::get('create/update/settings', [FunctionController::class, 'createUpdateSettings'])->name('user.create.update.settings');
    Route::post('save/update/settings', [FunctionController::class, 'saveUpdateSettings'])->name('user.save.update.settings');


});

Route::group(['prefix' => 'user', 'middleware' => 'user.guest'], function () {
    Route::get('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/login/process', [UserController::class, 'loginProcess'])->name('user.login.process');
    Route::get('/register', [UserController::class, 'register'])->name('user.register');
    Route::get('/register/process', [UserController::class, 'registerProcess'])->name('user.register.process');

});

Route::get('/', [FunctionController::class, 'website'])->name('website');
Route::get('/products/{category}', [FunctionController::class, 'productsByCategory'])->name('products.by.category');
Route::get('/products/detail/{slug}', [FunctionController::class, 'productDetail'])->name('products.detail');

