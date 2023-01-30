<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get("/", function () {return redirect("/dashboard");});

    Route::get("/gallery", [GalleryController::class, "index"]);
    Route::get("/gallery/add", [GalleryController::class, "add"]);
    Route::get("/gallery/{slug}", [GalleryController::class, "edit"]);
    Route::post("/gallery", [GalleryController::class, "save"]);
    
    Route::get("/product", [CategoryController::class, "index"]);
    Route::post("/product", [CategoryController::class, "save"]);
    Route::put("/product/{id}", [CategoryController::class, "update"]);
    Route::delete("/product/{id}", [CategoryController::class, "destroy"]);

    Route::get("/product/category", [CategoryController::class, "index"]);
    Route::post("/product/category", [CategoryController::class, "save"]);
    Route::put("/product/category/{id}", [CategoryController::class, "update"]);
    Route::delete("/product/category/{id}", [CategoryController::class, "destroy"]);
  });
});