<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
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

Route::middleware("isLogin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/produk/create", [ProdukController::class, "create"])->name("produk.create");
    Route::get("/produk/edit/{id}", [ProdukController::class, "edit"])->name("produk.edit");
    Route::post("/produk/store", [ProdukController::class, "store"])->name("produk.store");
    Route::get("/produk", [ProdukController::class, "index"])->name("produk");

    Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get("/user", [UserController::class, "index"])->name("user");
        Route::get("/user/create", [UserController::class, "create"])->name("user.create");
        Route::post("/user/create", [UserController::class, "store"])->name("user.store");
        Route::get("/user/edit/{id}", [UserController::class, "edit"])->name("user.edit");
        Route::patch("/user/update/{id}", [UserController::class, "update"])->name("user.update");
        Route::delete("/user/delete/{id}", [UserController::class, "destroy"])->name("user.delete");

        Route::get("/produk/create", [ProdukController::class, "create"])->name("produk.create");
        Route::get("/produk/edit/{id}", [ProdukController::class, "edit"])->name("produk.edit");
        Route::patch("/produk/update/{id}", [ProdukController::class, "update"])->name("produk.update");
        Route::delete("/produk/delete/{id}", [ProdukController::class, "destroy"])->name("produk.delete");



        Route::post("/produk/store", [ProdukController::class, "store"])->name("produk.store");
        Route::get("/produk", [ProdukController::class, "index"])->name("produk");

        Route::get("/penjualan", [PenjualanController::class, "index"])->name("penjualan");
        Route::get("/penjualan/create", [PenjualanController::class, "create"])->name("penjualan.create");



    });
});

require __DIR__ . '/auth.php';
