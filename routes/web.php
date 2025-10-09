<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/taken', [TodoController::class, 'index']);
Route::post('/taken', [TodoController::class, 'store']);



Route::get('/', function () {
    return view('welcome');
});
