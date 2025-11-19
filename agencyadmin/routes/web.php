<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScholarshipContentController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


route::get('view_inquiry', [InquiryController::class, 'view_inquiry'])->
middleware(['auth','admin']);
route::get('show_inquiry/{id}', [InquiryController::class, 'show_inquiry'])->
middleware(['auth','admin']);
route::get('destroy/{id}', [InquiryController::class, 'destroy'])->
middleware(['auth','admin']);
route::get('edit_inquiry/{id}', [InquiryController::class, 'edit_inquiry'])->
middleware(['auth','admin']);
route::post('update_inquiry/{id}', [InquiryController::class, 'update_inquiry'])->
middleware(['auth','admin']);




Route::middleware(['auth', 'admin'])->group(function () {
      Route::get('admin/scholarship/{country}', [ScholarshipContentController::class, 'show'])->name('admin.scholarship.show');
      Route::post('update_content/{id}', [ScholarshipContentController::class, 'update']);
});






require __DIR__.'/auth.php';
