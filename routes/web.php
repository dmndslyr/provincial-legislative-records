
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdinanceController;
use App\Http\Controllers\Admin\ResolutionController;
use App\Http\Controllers\PublicSearchController;

// Public Homepage
Route::redirect('/', '/search')->name('home');

// Public Legislative Search
Route::get('/search', [PublicSearchController::class, 'index'])
    ->name('public.search');

Route::get('/ordinance/{ordinance}', [PublicSearchController::class, 'showOrdinance'])
    ->name('public.ordinance.show');

Route::get('/resolution/{resolution}', [PublicSearchController::class, 'showResolution'])
    ->name('public.resolution.show');

// Protected Administrative Routes
Route::middleware(['auth'])->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // Ordinance Management
    Route::resource('admin/ordinances', OrdinanceController::class)
        ->names('admin.ordinances');

    // Resolution Management
    Route::resource('admin/resolutions', ResolutionController::class)
        ->names('admin.resolutions');

});

// Authentication Routes
require __DIR__.'/auth.php';
