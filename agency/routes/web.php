<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ScholarshipController;

Route::get('/', function () {
    return view('home');
})->name('home');

//form      form
Route::post('/inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');

// Main About Page
Route::get('/about', function () {
    return view('about'); // your about.blade.php file
});

// Sub-pages
Route::get('/about/awards', function () {
    return view('awards'); // awards.blade.php
});

Route::get('/about/team', function () {
    return view('team'); // team.blade.php
});

//Scholarships
Route::get('/scholarships', function () {
    return view('scholarships'); // your about.blade.php file
});
//scholarships/australia
Route::get('/scholarships/{country}', [ScholarshipController::class, 'show'])->name('scholarship.show');


//services/admission
Route::get('/services/admission', function () {
    return view('admission'); // your admission.blade.php file
});
//services/accommodation
Route::get('services/accommodation', function () {
    return view('accommodation'); // your accommodation.blade.php file
});

//services/visa
Route::get('services/visa', function () {
    return view('visa'); // your visa.blade.php file
});

//services/legal
Route::get('services/legal', function () {
    return view('legal'); // your legal.blade.php file
});
//contact
Route::get('/contact', function () {
    return view('contact'); // your contact.blade.php file
});