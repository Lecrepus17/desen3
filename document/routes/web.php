<?php

use App\Http\Controllers\UserController;
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

Route::get('/usuarios', [UserController::class, 'usuarios']);

Route::get('/login', function () {
    return view('login'); //modificar
});

Route::get('/listagem-solicitacoes', function () {
    return view('listagem_solicitacoes'); // mod
});

Route::get('/formulario-solicitacao', function () {
    return view('formulario_solicitacao'); // mod
});

