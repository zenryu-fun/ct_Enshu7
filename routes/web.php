<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'create']);

Route::get('/update', [TodoController::class, 'index']);
Route::post('/update', [TodoController::class, 'update']);

Route::get('/delete', [TodoController::class, 'index']);
Route::post('/delete', [TodoController::class, 'delete']);