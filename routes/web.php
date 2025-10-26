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

        Route::get('/ninjah2r', function () {
            return view('paginas de compras/kawasaki/NINJAH2R');
        });

        Route::get('/ninjazx10r', function () {
            return view('paginas de compras/kawasaki/NINJAZX10R');
        });

        Route::get('/ninja1000sx', function () {
            return view('paginas de compras/kawasaki/NINJA1000SX');
        });

        Route::get('/ninja650', function () {
            return view('paginas de compras/kawasaki/NINJA650');
        });

        Route::get('/ninja400', function () {
            return view('paginas de compras/kawasaki/ninja400');
        });
        
        Route::get('/zx4rr', function () {
            return view('paginas de compras/kawasaki/ninjazx4rr');
        });

        Route::get('/zh2', function () {
            return view('paginas de compras/kawasaki/zh2');
        });

        Route::get('/z1000', function () {
            return view('paginas de compras/kawasaki/z1000');
        });

        Route::get('/z900', function () {
            return view('paginas de compras/kawasaki/z900');
        });

        Route::get('/z650', function () {
            return view('paginas de compras/kawasaki/z650');
        });
    //-----HARLEY DAVIDSON-----//


        //


    //------ROYAL ENFIELD------//

        Route::get('/continentalgt650', function () {
            return view('continentalgt650');
        });

        Route::get('/interceptor650cc', function () {
            return view('interceptor650cc');
        });

        Route::get('/shotgun650', function () {
            return view('shotgun650');
        });

        Route::get('/supermeteor650', function () {
            return view('supermeteor650');
        });

        Route::get('/classic350', function () {
            return view('classic350');
        });

        Route::get('/hunter350', function () {
            return view('hunter350');
        });

        Route::get('/thunderbird500x', function () {
            return view('thunderbird500x');
        });

        Route::get('/bullet350', function () {
            return view('bullet350');
        });

        Route::get('/meteor350', function () {
            return view('bullet350');
        });

        Route::get('/Classic500', function () {
            return view('Classic500');
        });
        


    //-----------FIM-----------//