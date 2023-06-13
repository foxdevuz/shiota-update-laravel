<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class, 'index']);
Route::get('/order/place',[MainController::class, 'orederPlace']);
Route::get('/admin',[AdminController::class, 'login'])->middleware('adminLogged');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

// post requests
Route::post('/login', [AdminController::class, 'signin']);
