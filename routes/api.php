<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\TaskController;
use App\HTTP\Controllers\TagController;

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

Route::group(['prefix' => 'tasks'], function () {
	Route::get('/', [TaskController::class, 'index']);
	Route::get('/{id}', [TaskController::class, 'findOne']);
	Route::post('/create', [TaskController::class, 'create']);
});

Route::group(['prefix' => 'tags'], function () {
	Route::get('/', [TagController::class, 'index']);
	Route::get('/{id}', [TagController::class, 'findOne']);
	Route::post('/create', [TagController::class, 'create']);
});
