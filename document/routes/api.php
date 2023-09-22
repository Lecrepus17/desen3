<?php

use App\Http\Controllers\CicloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/docente', [CicloController::class, 'showDocente']);

Route::get('/curso', [CicloController::class, 'showCurso']);
Route::get('/curso/{id}', [CicloController::class, 'getCurso']);


Route::get('/disciplina', [CicloController::class, 'showDisciplina']);
Route::get('/disciplina/{id}', [CicloController::class, 'getDisciplina']);

Route::get('/turma', [CicloController::class, 'showTurma']);

Route::get('/ciclo', [CicloController::class, 'showCiclo']);

Route::get('/docCiclo', [CicloController::class, 'showDocen_ciclo']);
