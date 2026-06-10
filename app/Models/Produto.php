<?php


namespace App\Models;

// Classe base dos Models do Laravel
use Illuminate\Database\Eloquent\Model;

// Model responsável pela tabela produtos
class Produto extends Model
{

     /**
     * Campos que podem receber valores
     * através de create() e update()
     *
     * Segurança contra Mass Assignment.
     */
    protected $fillable = ['nome', 'preco', 'quantidade'];
}
