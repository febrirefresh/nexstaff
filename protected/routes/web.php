<?php
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [LoginController::class, 'dashboard']);
