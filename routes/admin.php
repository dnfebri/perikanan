<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get("/", function () {return redirect("/dashboard");});
    
    Route::get("/product/category", [CategoryController::class, "index"]);
    Route::post("/product/category", [CategoryController::class, "save"]);
    Route::put("/product/category/{id}", [CategoryController::class, "update"]);
    Route::delete("/product/category/{id}", [CategoryController::class, "destroy"]);
  });
});