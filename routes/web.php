<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/persona3', function () {
    return view('persona3');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/sign_up', function () {
    return view('sign_up');
});
