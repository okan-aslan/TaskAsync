<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get("/login", [AuthController::class, 'login'])->name('login');

Route::post("/login", [AuthController::class, 'authenticate']);

Route::get("/register", [AuthController::class, 'register'])->name('register');

Route::post("/register", [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/tasks', TaskController::class)->middleware('auth');

Route::get('/rankings', [RankingController::class, 'index'])->name('rankings');
