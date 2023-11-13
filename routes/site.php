<?php

use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CommentController;
use App\Http\Controllers\Site\ContactUsController;
use App\Http\Controllers\Site\AboutUsController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\OrderController;
use App\Http\Controllers\Site\PersonalController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\ShopController;
use App\Http\Controllers\Site\UserController;




Route::get('/', [HomeController::class, 'index'])->name('index');
Route::controller(ProductController::class)->prefix('/product')->group(function () {
    Route::get('/list', 'productlist')->name('productlist');
    Route::get('/detail/{id}', 'productdetail')->name('productdetail');
});
Route::get('/blog/list', [BlogController::class, 'BlogList'])->name('bloglist');
Route::get('/blog/detail/{id}', [BlogController::class, 'BlogDetail'])->name('blogdetail');
Route::get('/news/list', [NewsController::class, 'NewsList'])->name('newslist');
Route::get('/news/detail/{id}', [NewsController::class, 'NewsDetail'])->name('newsdetail');
Route::get('/personal/list', [PersonalController::class, 'Personallist'])->name('personal-list');
Route::post('/comment', [CommentController::class, 'create'])->name('comment_site');
Route::post('/order', [OrderController::class, 'create'])->name('order_site');
Route::get('/orderlist', [OrderController::class, 'List'])->name('order_list');
Route::get('/site/contact_us', [ContactUsController::class, 'getcontact'])->name('getcontact');
Route::post('/contact_us/comment', [ContactUsController::class, 'createContact_us'])->name('postcontact');
Route::get('/site/about_us', [AboutUsController::class, 'getabout'])->name('getabout');
Route::post('/register', [UserController::class, 'create'])->name('postregister');
Route::get('/site/register', [UserController::class, 'getRegister'])->name('register');
Route::get('/login', [UserController::class, 'getLogin'])->name('getlogin');
Route::post('site/login', [UserController::class, 'postLogin'])->name('site-login');
Route::post('/paying', [ShopController::class, 'postCheckout'])->name('checkout');
Route::get('/finish', [ShopController::class, 'finish'])->name('finish');








