<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('auth.dashboard');
    Route::get('/habito/cadastrar', [HabitController::class, 'create'])->name('habits.create');
    Route::post('/habito', [HabitController::class, 'store'])->name('habits.store');
    Route::get('/habito/{habit}', [SiteController::class, 'show'])->name('habits.show');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
