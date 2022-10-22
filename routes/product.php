<?php 

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Table\TableRow;

Route::get('/products', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/products/create',[ProductController::class,'create'])
    ->name('product.create');

Route::post('/products/store',[ProductController::class,'store'])
    ->name('product.store');









