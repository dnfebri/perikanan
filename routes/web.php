<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); });
Route::get('/', [PublicController::class, 'index']);
Route::get('/home', [PublicController::class, 'home']);
Route::get('/product', [PublicController::class, 'product']);
Route::get('/about-us', [PublicController::class, 'aboutUs']);
Route::get('/gallery', [PublicController::class, 'gallery']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
