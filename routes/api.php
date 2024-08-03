<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\categorieapicontroller;
use App\Http\Controllers\Api\articleapicontroller;
use App\Http\Controllers\Api\income_detailapicontroller;
use App\Http\Controllers\Api\incomeapicontroller;
use App\Http\Controllers\Api\sale_detailapicontroller;
use App\Http\Controllers\Api\saleapicontroller;
use App\Http\Controllers\Api\personapicontroller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route:: ApiResource('categories',categorieapicontroller::class);
Route:: ApiResource('articles',articleapicontroller::class);
Route:: ApiResource('incomes_details',income_detailapicontroller::class);
Route:: ApiResource('incomes',incomeapicontroller::class);
Route:: ApiResource('sales_details',sale_detailapicontroller::class);
Route:: ApiResource('sales',saleapicontroller::class);
Route:: ApiResource('people',personapicontroller::class);
