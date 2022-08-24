<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\CheckAdmin;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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



Route::middleware('guest')->prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/Register', [AuthController::class, 'Register'])->name('Register');
    Route::post('/Register', [AuthController::class, 'post_Register'])->name('post_Register');
});
//Đăng kí tài khoản


Route::prefix('/client')->name('client.')->group(function(){
    Route::get('/',[HomeController::class, 'index'])->name('Home');
    Route::get('contact', function () {
        return view('list.contact');
    })->name('contact');
   
    Route::get('blog', function () {
        return view('list.blog');
    })->name('blog');

    Route::get('category',[HomeController::class, 'ProductHome'])->name('category');


    Route::get('cart', [HomeController::class, 'Cart'])->name('cart');
    Route::get('addCart/{id}', [HomeController::class, 'addCart'])->name('addCart');
    Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

    // bình luận 
    Route::post('/comment/{id}', [CommentController::class, 'create'])->name('comment');

    Route::get('/searchProduct', [HomeController::class, 'searchProduct'])->name('searchProduct');

    
    //Hiển thị sản phẩm ra theo danh muc
    Route::get('/categoryProducts/{id}', [HomeController::class, 'categoryProducts'])->name('categoryProducts');
    //end Hiển thị ra danh mục

    Route::get('single-product/{id}', [HomeController::class, 'single_product'])->name('single-product');
});




Route::middleware('CheckAdmin')->prefix('/admin')->name('admin.')->group(function () {

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('master');
        Route::delete('/delete/{id}', [
            UserController::class, 'delete'
        ])->name('delete');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::GET('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::get('/status/{user}', [UserController::class, 'status'])->name('status');
    });

    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::delete('/delete/{id}', [
            ProductController::class, 'delete'
        ])->name('delete');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'postCreate'])->name('store');
        Route::GET('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('/status/{product}', [ProductController::class, 'status'])->name('status');
    });

    Route::prefix('/category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::delete('/delete/{id}', [
            CategoryController::class, 'delete'
        ])->name('delete');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::GET('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    });
    Route::prefix('/comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::delete('/delete/{id}', [
            CommentController::class, 'delete'
        ])->name('delete');
    });
 
});




Route::get('auth/logout', [AuthController::class, 'logout'])->middleware('auth');
