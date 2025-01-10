<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CTDHControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show'); 
    Route::resource('/Sachs', BookController::class);
    Route::delete('/Sachs/{MaSach}', [BookController::class, 'destroy'])->name('Sachs.destroy');
    Route::get('/Sachs/{MaSach}', [BookController::class, 'show'])->name('Sachs.show'); 
    Route::get('/Sachs/{MaSach}', [BookController::class, 'edit'])->name('Sachs.edit'); 
    Route::get('/Sachs/{MaSach}', [BookController::class, 'update'])->name('Sachs.update'); 
    Route::resource('/Sales', SalesController::class);
    Route::get('/Sales/{MaSach}', [SalesController::class, 'show'])->name('Sales.show');
    Route::get('/Sales/{MaSach}', [SalesController::class, 'edit'])->name('Sales.edit');
    Route::get('/Sales/{MaSach}', [SalesController::class, 'update'])->name('Sales.update');
    Route::delete('/Sales/{MaChiTiet}', [SalesController::class, 'destroy'])->name('Sales.destroy');
    Route::get('/Sales/orders/{maKhachHang}', [SalesController::class, 'getOrdersByCustomer'])->name('Sales.orders_by_customer');
    Route::resource('/CTDH', CTDHControler::class);
    Route::get('/orders/status/{MaDonHang}', [OrderController::class, 'getOrderStatus']);
    Route::get('/orders/status/{MaDonHang}', [OrderController::class, 'showOrderStatus']);
    Route::get('/Sales/supplier/{MaSach}', [SalesController::class, 'viewSupplier'])->name('Sales.view_supplier');
  



    
   
});



require __DIR__.'/auth.php';


