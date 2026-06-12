<?php

// Classe responsável pelas rotas
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

// Importa o controller de produtos
use App\Http\Controllers\ProdutoController;


Route::resource('produtos', ProdutoController::class);
Route::resource('clientes', ClientController::class);
