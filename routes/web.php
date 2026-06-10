<?php

// Classe responsável pelas rotas
use Illuminate\Support\Facades\Route;

// Importa o controller de produtos
use App\Http\Controllers\ProdutoController;

/**
 * Rota inicial
 *
 * Quando o usuário acessar:
 * http://127.0.0.1:8000
 *
 * será redirecionado para:
 * /produtos
 */
Route::get('/', function () {
    return redirect()->route('produtos.index');
});

/**
 * Cria automaticamente todas as rotas do CRUD
 *
 * index
 * create
 * store
 * show
 * edit
 * update
 * destroy
 */
Route::resource('produtos', ProdutoController::class);
