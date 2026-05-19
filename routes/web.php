<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/serving', function () {
    return view('pages.serving');
})->name('serving');

Route::get('/reseller', function () {
    return view('pages.reseller');
})->name('reseller');
