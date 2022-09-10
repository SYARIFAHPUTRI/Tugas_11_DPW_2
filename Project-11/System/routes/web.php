<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

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
    return view('template.index');
});

// Route::get('/cart', function () {
//     return view('template.cart');
// });

// Route::get('/checkout', function () {
//     return view('template.checkout');
// });

// Route::get('/index', function () {
//     return view('template.index');
// });

// Route::get('/contact', function () {
//     return view('template.contact');
// });

// Route::get('/login', function () {
//     return view('template.login');
// });

// Route::get('/my-account', function () {
//     return view('template.my-account');
// });

// Route::get('/product-detail', function () {
//     return view('template.product-detail');
// });

// Route::get('/product-list', function () {
//     return view('template.product-list');
// });

// Route::get('/wishlist', function () {
//     return view('template.wishlist');
// });


// Route::get('/dashboard', function () {
//     return view('admin.section.dashboard');
// });

// Route::get('/produk', function () {
//     return view('admin.section.produk');
// });

Route::get('/kategori', function () {
    return view('admin.section.kategori');
});

Route::get('/diskon', function () {
    return view('admin.section.diskon');
});

// Route::get('/login-admin', function () {
//     return view('admin.section.login-admin');
// });

Route::get('/supplier', function () {
    return view('admin.section.supplier');
});


Route::get('/pelanggan', function () {
    return view('admin.section.pelanggan');
});

// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);

// logout
Route::get('logout', [AuthController::class, 'Logout']);


Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){   
    Route::post('produk/filter', [ProdukController::class,'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);

});

// home

Route::get('base', [HomeController::class,'showBase']);
Route::get('dashboard', [HomeController::class,'showDashboard']);
Route::get('Kategori', [HomeController::class,'showkategori']);

//admin
// Route::get('admin/produk', [ProdukController::class,'index']);
// Route::get('produk/create', [ProdukController::class,'create']);
// Route::post('produk', [ProdukController::class,'store']);
// Route::get('produk/{produk}', [ProdukController::class,'show']);
// Route::post('produk/create', [ProdukController::class,'store']);
// Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
// Route::put('produk/{produk}', [ProdukController::class, 'update']);
// Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

//client

Route::get('index', [ClientController::class,'showIndex']);
Route::get('product-list', [ClientController::class,'showProduk']);
Route::get('product-detail', [ClientController::class,'showDetail']);
Route::get('cart', [ClientController::class,'showCart']);
Route::get('checkout', [ClientController::class,'showCheckout']);
Route::get('my-account', [ClientController::class,'showMyaccount']);
Route::get('more-pages', [ClientController::class,'showMorepages']);
Route::get('wishlist', [ClientController::class,'showWishlist']);
Route::get('contact', [ClientController::class,'showContact']);

// user

// Route::get('admin/user', [UserController::class,'index']);
// Route::get('user/create', [UserController::class,'create']);
// Route::post('user', [UserController::class,'store']);
// Route::get('user/{user}', [UserController::class,'show']);
// Route::post('user/create', [UserController::class,'store']);
// Route::get('user/{user}/edit', [UserController::class, 'edit']);
// Route::put('user/{user}', [UserController::class, 'update']);
// Route::delete('user/{user}', [UserController::class, 'destroy']);

Route::get( 'test-collection', [HomeController::class, 'testCollection']);