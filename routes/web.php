<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/saibamais', function () {
    return view('saibamais');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/perfil', function () {
    return view('perfil');
});


Route::get('/recuperarsenha', function () {
    return view('esqueceu');
});

Route::get('/trocarsenha', function () {
    return view('redefinir');
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/chsenha', [UsuarioController::class, 'mudarSenha']);
Route::post('/chfone', [UsuarioController::class, 'mudarFone']);
Route::post('/chnome', [UsuarioController::class, 'mudarnome']);
Route::post('/chcep', [UsuarioController::class, 'mudarCEP']);

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

        Route::get('/zx4r', function () {
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

        Route::get('/electraglide', function () {
            return view('paginas de compras/harleydavidson/electraglide');
        });

        Route::get('/fatbob', function () {
            return view('paginas de compras/harleydavidson/fatbob');
        });

        Route::get('/fatboy', function () {
            return view('paginas de compras/harleydavidson/fatboy');
        });

        Route::get('/heritageclassic', function () {
            return view('paginas de compras/harleydavidson/heritageclassic');
        });

        Route::get('/lowriders', function () {
            return view('paginas de compras/harleydavidson/lowriders');
        });

        Route::get('/nightster', function () {
            return view('paginas de compras/harleydavidson/nightster');
        });

        Route::get('/panamerica', function () {
            return view('paginas de compras/harleydavidson/panamerica');
        });

        Route::get('/roadking', function () {
            return view('paginas de compras/harleydavidson/roadking');
        });

        Route::get('/sportster', function () {
            return view('paginas de compras/harleydavidson/sportster');
        });

        Route::get('/streetglide', function () {
            return view('paginas de compras/harleydavidson/streetglide');
        });


    //------ROYAL ENFIELD------//

        Route::get('/continentalgt650', function () {
            return view('paginas de compras/royalenfield/continentalgt650');
        });

        Route::get('/interceptor650cc', function () {
            return view('paginas de compras/royalenfield/interceptor650cc');
        });

        Route::get('/shotgun650', function () {
            return view('paginas de compras/royalenfield/shotgun650');
        });

        Route::get('/supermeteor650', function () {
            return view('paginas de compras/royalenfield/supermeteor650');
        });

        Route::get('/classic350', function () {
            return view('paginas de compras/royalenfield/classic350');
        });

        Route::get('/hunter350', function () {
            return view('paginas de compras/royalenfield/hunter350');
        });

        Route::get('/thunderbird500x', function () {
            return view('paginas de compras/royalenfield/thunderbird500x');
        });

        Route::get('/bullet350', function () {
            return view('paginas de compras/royalenfield/bullet350');
        });

        Route::get('/meteor350', function () {
            return view('paginas de compras/royalenfield/meteor350');
        });

        Route::get('/classic500', function () {
            return view('paginas de compras/royalenfield/classic500');
        });

        Route::get('/contato', [ContatoController::class, 'index'])->name('contato.form');

        Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');



    //-----------FIM-----------//
