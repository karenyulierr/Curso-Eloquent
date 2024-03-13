<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [ProfileController::class, 'index']);
Route::get('/categories-list', [CategoryController::class, 'index']);
Route::get('/categories-new', [CategoryController::class, 'store']);
Route::get('/categories-update', [CategoryController::class, 'update']);
Route::get('/categories-delete', [CategoryController::class, 'destroy']);
