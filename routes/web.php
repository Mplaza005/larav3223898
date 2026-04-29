<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\ConsultasController;

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



Route::get('consultas',[ConsultasController::class,'consulta']);


Route::get('operacionesSumar/{num1}/{num2}',[OperacionesController::class,'sumar']);
Route::get('operacionesRestar',[OperacionesController::class,'restar']);
