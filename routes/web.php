<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SampahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/sampah', [SampahController::class, 'index']);
Route::get('/tukar', [SampahController::class, 'tukar']);
Route::post('/tukar', [SampahController::class, 'tukarSampah']);

Route::get('/dashboard', [SampahController::class, 'dashboard']);
