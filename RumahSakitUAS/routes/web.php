<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

Route::get("/", [loginController::class,"first"])->name("login");
Route::post("/confirmLogin", [loginController::class,"login"])->name("confirmLogin");

Route::get("/reg", [registerController::class,"view"])->name("regis");
Route::post("/confirm", [registerController::class,"register"])->name("confirm");

Route::get("/home", [homeController::class,"index"])->name("home");
Route::post("/store", [homeController::class,"store"])->name("store");
Route::get("/tampil", [homeController::class,"show"])->name("tampil");
