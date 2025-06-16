<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('clients')->group(function(){
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('client.index');
});