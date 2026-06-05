<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return redirect('/categorias');
});

Route::resource('categorias', CategoriaController::class);
