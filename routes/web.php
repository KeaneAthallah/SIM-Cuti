<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index'])->name('home.index');
Route::get('/cuti', function () {
    return view('cuti',['title' => 'Dashboard || Submit','subtitle' => 'Submit cuti']);
})->name('cuti');
