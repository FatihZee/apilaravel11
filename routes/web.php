<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\MenuController;

Route::get('/pembelis', [PembeliController::class, 'index']);
Route::post('/pembelis', [PembeliController::class, 'store']);
Route::get('/pembelis/{id}', [PembeliController::class, 'show']);
Route::put('/pembelis/{id}', [PembeliController::class, 'update']);
Route::delete('/pembelis/{id}', [PembeliController::class, 'destroy']);

Route::get('/menus', [MenuController::class, 'index']);
Route::post('/menus', [MenuController::class, 'store']);
Route::get('/menus/{id}', [MenuController::class, 'show']);
Route::put('/menus/{id}', [MenuController::class, 'update']);
Route::delete('/menus/{id}', [MenuController::class, 'destroy']);