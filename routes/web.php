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


Route::get('/royalenfield', function () {
    return view('royalenfield');
});

Route::get('/harleydavidson', function () {
    return view('harleydavidson');
});

// PAGINAS DE COMPRAS DA LOJA (⚠☣☢ EXTREMAMENTE TENEBROSO ☢☣⚠)

    //---------KAWASAKI---------//

        Route::get('/NinjaH2R', function () {
            return view('paginas de compras/NINJAH2R');
        });

        Route::get('/NinjaZX10R', function () {
            return view('paginas de compras/NINJAZX10R');
        });

        Route::get('/Ninja1000SX', function () {
            return view('paginas de compras/NINJA1000SX');
        });

    //-----HARLEY DAVIDSON-----//


        //


    //------ROYAL ENFIELD------//


        //


    //-----------FIM-----------//