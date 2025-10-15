<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::get('/taken', [TodoController::class, 'index']);
Route::post('/taken', [TodoController::class, 'store']);
Route::delete('/taken/{id}', [TodoController::class, 'destroy']);

Route::get('/taken/{id}/edit', [TodoController::class, 'edit']);
Route::put('/taken/{id}', [TodoController::class, 'update']);
