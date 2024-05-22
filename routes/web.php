<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('register');
})->name('register');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/panel', function() {
    return view('panel');
})->name('panel');


Route::post('/register', [Usercontroller::class, 'register']);
Route::post('/login', [Usercontroller::class, 'login']);
