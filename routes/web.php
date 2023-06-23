<?php

use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('base.dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::get('/CapsDrogas', function () {
        return view('CapsDrogas');
    });
    Route::get('/CapsAdulto', function () {
        return view('CapsAdulto');
    });
    Route::get('/CapsInf', function () {
        return view('CapsInf');
    });
    Route::get('/outros', function () {
        return view('outros');
    });
    Route::get('gerarFarmaciaPDF', [PDFController::class, 'gerarFarmaciaPDF']);

    Route::middleware('auth')->group(function () {
        Route::resource('usuario', UsuarioController::class);
        Route::post('usuario/search', [UsuarioController::class, 'search'])->name(
            'usuario.search'
        );
        Route::resource('farmacia', FarmaciaController::class);
        Route::post('farmacia/search', [FarmaciaController::class, 'search'])->name(
            'farmacia.search'
        );
        Route::resource('atendimento', AtendimentoController::class);
        Route::post('atendimento/search', [AtendimentoController::class, 'search'])->name(
            'atendimento.search'
        );
    });

require __DIR__ . '/auth.php';

