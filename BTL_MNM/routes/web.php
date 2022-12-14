<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\Layout\CategoriesController;
use App\Http\Controllers\Admin\Layout\ProductsController;
use App\Http\Controllers\Admin\Layout\NewsController;
use App\Http\Controllers\Admin\Layout\UsersController;
use App\Http\Controllers\Admin\Layout\LoginController;
use App\Http\Controllers\Admin\Layout\RegisterController;
use App\Http\Controllers\Admin\Layout\OrdersController;
use App\Http\Controllers\Customer\HomeCustomController;
use App\Http\Controllers\Customer\LoginCustomController;
use App\Http\Controllers\Customer\RegisterCustomController;
use App\Http\Controllers\Customer\ProductsCustomController;
use App\Http\Controllers\Customer\CartController;

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
// cho phan admin
Route::get('/', function () {
    return view('backend.home-admin');
});

//=================================== backend
//login
Route::post('admin/login',[LoginController::class, 'login'])->name('login');
Route::get('admin/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('admin/register',[RegisterController::class, 'register'])->name("register");

Route::get("/admin/home",[AdminHomeController::class, "index"]);

Route::post('admin/login',[LoginController::class, 'login'])->name('login');
Route::post('admin/register',[RegisterController::class, 'register'])->name("register");


//categories
Route::get("/backend/categories",[CategoriesController::class, "read"]);
Route::get("/backend/categories/update/{id}",[CategoriesController::class, "update"]);
Route::post("/backend/categories/update/{id}",[CategoriesController::class, "updatePost"]);
Route::get("/backend/categories/create",[CategoriesController::class, "create"]);
Route::post("/backend/categories/create",[CategoriesController::class, "createPost"]);
Route::get("/backend/categories/delete/{id}",[CategoriesController::class, "delete"]);
//product

Route::get("/backend/products",[ProductsController::class, "read"]);
Route::get("/backend/products/update/{id}",[ProductsController::class, "update"]);
Route::post("/backend/products/update/{id}",[ProductsController::class, "updatePost"]);
Route::get("/backend/products/create",[ProductsController::class, "create"]);
Route::post("/backend/products/create",[ProductsController::class, "createPost"]);
Route::get("/backend/products/delete/{id}",[ProductsController::class, "delete"]);


//list users

Route::get("/admin/users",[UsersController::class, "read"]);
Route::get("/admin/users/delete/{id}",[UsersController::class, "delete"]);

//order 

Route::get("/admin/orders",[OrdersController::class, "read"]);
Route::get("/admin/orders/detail/{id}",[OrdersController::class, "getDetail"]);


//news
Route::get("/backend/news",[NewsController::class, "read"]);
Route::get("/backend/news/update/{id}",[NewsController::class, "update"]);
Route::post("/backend/news/update/{id}",[NewsController::class, "updatePost"]);
Route::get("/backend/news/create",[NewsController::class, "create"]);
Route::post("/backend/news/create",[NewsController::class, "createPost"]);
Route::get("/backend/news/delete/{id}",[NewsController::class, "delete"]);



//===================================FRONTEND
Route::get('customer/login',function(){
    return view("frontend.account.login");
});
Route::get('customer/register',function(){
    return view("frontend.account.register");
});


//login


Route::post('customer/login',[LoginCustomController::class, 'login'])->name('login');
Route::get('customer/logout',[LoginCustomController::class, 'logout'])->name('logout');

Route::post('customer/register',[RegisterCustomController::class, 'register'])->name("register");


Route::middleware('auth')->group(function(){
    Route::get('home',function(){
        return view("frontend.homepage.layout-trang-chu");
    })->name("home");
});
//homepage

Route::get('home',[HomeCustomController::class, 'home'])->name('home');
//product
Route::get('customer/products/detail/{id}',[ProductsCustomController::class, 'detail']);
Route::get('customer/categories/{cateID}',[ProductsCustomController::class, 'getByCate']);

//cart

// Route::get('customer/cart',[CartController::class, 'viewcart']);
Route::get('customer/cart/{id}',[CartController::class, 'viewcart']);
Route::get('customer/order',[CartController::class, 'orders']);
Route::get('customer/delete/{id}',[CartController::class, 'delete']);
