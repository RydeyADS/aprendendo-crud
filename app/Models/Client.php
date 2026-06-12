<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'data_nascimento',
        'endereco',
        'email',
        'whatsapp'
    ];
}

