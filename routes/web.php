<?php

use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/test', [UserController::class, 'list']);
Route::get('/php', fn () => phpinfo());
Route::post('/user-import', [UserController::class, 'import'])->name('import');
Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/sekdis/{id}', [DashboardController::class, 'sekdis1'])->name('sekdis1');
    Route::post('/sekdis1/{id}', [DashboardController::class, 'sekdis'])->name('sekdis');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('users');
    Route::get('/pdf/{pdf}', [DashboardController::class, 'pdf'])->name('pdf');
    Route::resource('/cuti', CutiController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/users-delete{id}', [UserController::class, 'delete'])->name('users.delete');
});

require __DIR__ . '/auth.php';
