<?php 

use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Table\TableRow;
use Monolog\Handler\RotatingFileHandler;

Route::get('/transactions',[TransactionController::class,'index'])
    ->name('transaction.index');

Route::get('/transactions/create',[TransactionController::class,'create'])
    ->name('transaction.create');

Route::post('/transactions',[TransactionController::class,'store'])
    ->name('transaction.store');