<?php

use Illuminate\Support\Facades\Route;

// Web Route
// Here is where you can register web routes for your application.
// These routes are loaded by the RouteServiceProvider within a group
// which contains the "web" middleware group. Now create something great.

Route::get('/', function () {
    return view('home');
});

Route::get('/artist', function () {
    return view('artist');
});

Route::get('/manager', function () {
    return view('manager');
});

Route::get('/accountant', function () {
    return view('accountant');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('login');
});

