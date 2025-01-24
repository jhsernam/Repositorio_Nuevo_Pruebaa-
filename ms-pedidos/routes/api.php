<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/orders', [orderController::class, 'index']);
Route::post('/orders', [orderController::class, 'store']);
Route::get('/orders/{id}', [orderController::class, 'show']);
Route::put('/orders/{id}', [orderController::class, 'update']);
Route::delete('/orders/{id}', [orderController::class, 'destroy']);