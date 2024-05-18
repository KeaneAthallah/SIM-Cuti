<?php

use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index'])->name('home.index');
Route::resource('/cuti',CutiController::class);
