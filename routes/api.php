<?php

use App\Http\Controllers\ItensController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Rotas para os usuarios 

Route::get('usuarios', [UsuariosController::class, 'index']);
Route::post('usuarios', [UsuariosController::class, 'store']);
Route::put('usuarios/{id_usu}', [UsuariosController::class, 'update']);
Route::delete('usuarios/{id_usu}', [UsuariosController::class, 'delete']);

//Rotas para os Itens 

Route::get('itens', [ItensController::class, 'index']);
Route::post('itens', [ItensController::class, 'store']);
Route::put('itens/{id}', [ItensController::class, 'update']);
Route::delete('itens/{id}', [ItensController::class, 'delete']);


