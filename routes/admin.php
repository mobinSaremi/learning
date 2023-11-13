<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RoleController;


Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('login');
Route::get('/generate-password/{password}', function ($password) {
});
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('admin')->group(function () {

   Route::controller(CategoryController::class)->prefix('/admin/category')->name('admin.category')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/add', 'getAdd')->name('.list.add');
      Route::post('/add', 'postAdd')->name('.list.add');
      Route::get('/edit/{id}', 'getEdit')->name('.list.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.list.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });

   Route::controller(ProductImageController::class)->prefix('/admin/image')->name('admin.image')->group(function () {
      Route::get('/list/{id}', [ProductImageController::class, 'getList'])->name('.list');
      Route::get('/add/{id}', [ProductImageController::class, 'getAdd'])->name('.list.Add');
      Route::post('/add', [ProductImageController::class, 'postAdd'])->name('.list.add');
      Route::get('/delete/{id}', [ProductImageController::class, 'getDelete'])->name('.list.delete');
   });
   
   Route::controller(ProductController::class)->prefix('/admin/product')->name('admin.product')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/add', 'getAdd')->name('.list.add');
      Route::post('/add', 'postAdd')->name('.list.add');
      Route::get('/edit/{id}', 'getEdit')->name('.list.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.list.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });

   Route::controller(SliderController::class)->prefix('/admin/slider')->name('admin.slider')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/add', 'getAdd')->name('.list.add');
      Route::post('/add', 'postAdd')->name('.list.add');
      Route::get('/edit/{id}', 'getEdit')->name('.list.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.list.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });

   
   Route::controller(UserController::class)->prefix('/admin/user')->name('admin.user')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/add', 'getAdd')->name('.list.add');
      Route::post('/add', 'postAdd')->name('.list.add');
      Route::get('/edit/{id}', 'getEdit')->name('.list.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.list.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });

   Route::controller(OrderController::class)->prefix('/admin/order')->name('admin.order')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/update',  'getUpdate')->name('.list.update');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });


   Route::controller(RoleController::class)->prefix('/admin/role')->name('admin.role')->group(function () {
      Route::get('/list', 'getList')->name('.list');
      Route::get('/add', 'getAdd')->name('.list.add');
      Route::post('/add', 'postAdd')->name('.list.add');
      Route::get('/edit/{id}', 'getEdit')->name('.list.edit');
      Route::post('/edit/{id}', 'postEdit')->name('.list.edit');
      Route::get('/delete/{id}', 'getDelete')->name('.list.delete');
   });

   Route::controller(SettingController::class)->prefix('/admin/setting')->name('admin.setting')->group(function () {
      Route::get('',  'getEdit')->name('.list.admin');
      Route::post('',  'postEdit')->name('.list');
   });

   Route::get('/admin', [IndexController::class, 'index'])->name('admin.index');
});
