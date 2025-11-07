<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/taken', [TodoController::class, 'index'])->name('taken.index');
    Route::post('/taken', [TodoController::class, 'store'])->name('taken.store');
    Route::delete('/taken/{id}', [TodoController::class, 'destroy'])->name('taken.destroy');
    Route::get('/taken/{id}/edit', [TodoController::class, 'edit'])->name('taken.edit');
    Route::put('/taken/{id}', [TodoController::class, 'update'])->name('taken.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
