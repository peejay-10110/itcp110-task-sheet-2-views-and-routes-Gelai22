<?php

use Illuminate\Support\Facades\Route;

// 1. Home Page
Route::get('/', function () { return view('home'); })->name('home');

// 2. About Me
Route::get('/about', function () { return view('about'); })->name('about');

// 3. Work/Portfolio
Route::get('/work', function () { return view('work'); })->name('work');

// 4. Specific Projects
Route::get('/projects', function () { return view('projects'); })->name('projects');

// 5. Technical Skills
Route::get('/skills', function () { return view('skills'); })->name('skills');

// 6. Professional Experience
Route::get('/experience', function () { return view('experience'); })->name('experience');

// 7. Blog/Journal
Route::get('/blog', function () { return view('blog'); })->name('blog');

// 8. Contact
Route::get('/contact', function () { return view('contact'); })->name('contact');

// 9. Services (Additional Route)
Route::get('/services', function () { return view('services'); })->name('services');

// 10. Privacy Policy (Additional Route)
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');
