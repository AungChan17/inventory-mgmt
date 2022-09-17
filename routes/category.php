<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('category.index');