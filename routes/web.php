<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Placeholder routes for other pages
Route::get('/about', function () { return view('pages.about'); });
Route::get('/products', function () { return view('pages.products'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/quote', function () { return view('pages.quote'); });

// Authentication routes will be added here later once installed
