<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// importamos los controladores
use App\Http\Controllers\articleController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\incomeController;
use App\Http\Controllers\income_detailController;
use App\Http\Controllers\personController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\sale_detailController;
use App\Http\Controllers\RoleController;

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
    //Rutas de nuestra app
    Route::resource('/dashboard/article',articleController::class);
    Route::resource('/dashboard/categorie',categorieController::class);
    Route::resource('/dashboard/income',incomeController::class);
    Route::resource('/dashboard/income_detail',income_detailController::class);
    Route::resource('/dashboard/person',personController::class);
    Route::resource('/dashboard/sale',saleController::class);
    Route::resource('/dashboard/sale_detail',sale_detailController::class);
    Route::resource('/dashboard/role',RoleController::class);
    Route::get('dashboard/income/{id}/detalle', [IncomeController::class, 'detalle'])->name('income.detalle');

});

require __DIR__.'/auth.php';
