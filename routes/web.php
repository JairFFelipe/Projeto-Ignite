<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/startform', [RegisterController::class, 'registrar']);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/logincheck', [LoginController::class, 'login']);

Route::get('/kawasaki', function () {
    return view('kawasaki');
});


Route::get('/harleydavidson', [LoginController::class, 'harleydavidson']);

Route::get('/royalenfield', [LoginController::class, 'royalenfield']);