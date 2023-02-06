<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
  return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get("/", function () {
      return redirect("/dashboard");
    });

    Route::get("/gallery", [GalleryController::class, "index"]);
    Route::get("/gallery/add", [GalleryController::class, "add"]);
    Route::get("/gallery/{slug}", [GalleryController::class, "edit"]);
    Route::post("/gallery", [GalleryController::class, "save"]);
    Route::put("/gallery", [GalleryController::class, "update"]);
    Route::delete("/gallery", [GalleryController::class, "destroy"]);

    Route::get("/product/category", [CategoryController::class, "index"]);
    Route::post("/product/category", [CategoryController::class, "save"]);
    Route::put("/product/category/{id}", [CategoryController::class, "update"]);
    Route::delete("/product/category/{id}", [CategoryController::class, "destroy"]);

    Route::get("/product", [ProductController::class, "index"]);
    Route::get("/product/add", [ProductController::class, "add"]);
    Route::get("/product/edit/{slug}", [ProductController::class, "edit"]);
    Route::get("/product/{slug}", [ProductController::class, "show"]);
    Route::post("/product", [ProductController::class, "save"]);
    Route::put("/product/{slug}", [ProductController::class, "update"]);
    Route::delete("/product/{id}", [ProductController::class, "destroy"]);

    Route::get("/faq", [FaqController::class, "index"]);
    Route::get("/faq/{id}", [FaqController::class, "edit"]);
    Route::post("/faq", [FaqController::class, "save"]);
    Route::put("/faq/{id}", [FaqController::class, "update"]);
    Route::delete("/faq", [FaqController::class, "destroy"]);
  });
});
