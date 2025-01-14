<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowingController;

Route::get('/', function () {
    Route::resource('books', BookController::class);
    Route::resource('users', UserController::class);
    Route::resource('borrowings', BorrowingController::class);
});
