<?php

use App\Http\Controllers\ProfileController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); });
Route::get('/', function () { return view('index', ["title" => "home"]); });
Route::get('/home', function () { return view('home'); });
Route::get('/product', function () { return view('product'); });
Route::get('/about-us', function () { return view('about-us'); });
Route::get('/gallery', function () { return view('gallery', ["data" => Gallery::all()->toArray()]); });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
