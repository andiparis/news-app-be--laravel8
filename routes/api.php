<?php

use App\Http\Controllers\Api\DashboardNewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/admin/news', [DashboardNewsController::class, 'index']);
Route::post('/admin/news', [DashboardNewsController::class, 'store']);
Route::put('/admin/news', [DashboardNewsController::class, 'update']);
Route::delete('/admin/news', [DashboardNewsController::class, 'destroy']);
