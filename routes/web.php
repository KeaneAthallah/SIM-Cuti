<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Dashboard || Home','subtitle' => 'Home']);
})->name('home');
Route::get('/cuti', function () {
    return view('cuti',['title' => 'Dashboard || Submit','subtitle' => 'Submit cuti']);
})->name('cuti');
