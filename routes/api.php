<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
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

Route::controller(AuthController::class)->middleware('api')->group(function () {
    Route::get('/user', 'me');
    Route::post('/login', 'login');
});

Route::controller(CidadeController::class)->middleware('api')->group(function () {
    Route::get('/cidades', 'listar_cidades');
});

Route::controller(MedicoController::class)->middleware('api')->group(function () {
    Route::get('/medicos', 'listar_medico');
    Route::get('/cidades/{id}/medicos', 'listar_medico_cidade');

    Route::post('/medicos', 'create');
    Route::post('/medicos/{id}/pacientes', 'vincular_paciente_medico');
});

Route::controller(PacienteController::class)->middleware('api')->group(function () {
    Route::get('/medicos/{id}/pacientes', 'lita_paciente_medico');

    Route::post('/pacientes', 'create');
    Route::put('/pacientes/{id}', 'update');
});
