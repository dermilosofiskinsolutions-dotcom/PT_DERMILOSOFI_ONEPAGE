e<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Profile;

Route::get('/', function () {
    $products = Product::where('is_active', true)->get();
    $blogs = Blog::where('is_active', true)->orderBy('published_date', 'desc')->get();

    return view('welcome', compact('products', 'blogs'));
});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ApplicantController::class, 'index'])->name('dashboard');
});

Route::get('/apply', function () {
    return view('apply');
})->name('apply');

Route::post('/apply', [ApplicantController::class, 'store'])->name('apply.post');

// Admin routes for content management
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('reports', ReportController::class);
});
