<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrescriptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsClient;

// accueil
Route::get('/', function () {
    return view('pages.home');
});

// service
Route::get('/service', function () {
    return view('service');
})->name('service');

// contact

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/demande', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/demande', [ContactController::class, 'store'])->name('contact.store');


Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');



Route::middleware('auth')->group(function () {

    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update-ajax/{id}', [CartController::class, 'updateAjax'])->name('cart.update.ajax');
    Route::delete('/cart/remove-ajax/{id}', [CartController::class, 'removeAjax'])->name('cart.remove.ajax');
    Route::get('/cart/count', [CartController::class, 'count'])->name('cart.count');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/checkout', [OrderController::class, 'store']);

    Route::post('/prescription', [PrescriptionController::class, 'store']);
});

Route::get('/p-search_res-ltas', function () {
    return view('pages.search');
});

Route::get('/index.html-pharm_Gard', function () {
    return view('pages.pharmGard');
});

// ROUTE ADMIN

Route::prefix('adminSesion_p=1&u-iOuTH')->middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('adminSesion_p=1&u-iOuTH.dashboard');

    Route::get('admin/products', [AdminProductController::class, 'allProducts']);
    Route::get('admin/orders', [AdminOrderController::class, 'allOrders']);
    // route logouAdmin
    Route::get('adminSesion_p=1&u-iOuTH/logout', [AdminController::class, 'AdminLogout'])->name('adminSesion_p=1&u-iOuTH.logout');
});

// Routes pour le personnel de santé
Route::middleware(['auth', 'role:Pharmacien,Preparateur'])->group(function () {
    // Route::get('/pharmacie/stocks', [StockController::class, 'index']);
});





Route::middleware(['auth', IsClient::class])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
