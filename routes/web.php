<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      // Protect other post routes with authentication
      Route::resource('posts', PostController::class)->except(['show']);


    Route::middleware('is_admin')->group(function () {
        Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    });

});

// Fallback route to redirect to home page if endpoint doesn't exist
Route::fallback(function () {
    return redirect('/');
});


require __DIR__.'/auth.php';
