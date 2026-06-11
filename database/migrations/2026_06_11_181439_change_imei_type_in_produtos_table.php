<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Cria uma migration anônima (classe sem nome)
// Ela serve para alterar a estrutura da tabela "produtos"
return new class extends Migration
{

    // MÉTODO UP (executa a alteração no banco)
    // Aqui é onde você define o que vai mudar na tabela
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {

            // Altera a coluna "imei" na tabela produtos
            // Muda o tipo dela para string com tamanho 15 (VARCHAR 15)
            $table->string('imei', 15)->change();

        });
    }


    // MÉTODO DOWN (reverte a alteração)
    // Usado quando você dá rollback na migration
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {

            // Reverte a coluna "imei" para string novamente
            // OBS: aqui você manteve igual ao up, então não muda nada de fato
            $table->string('imei', 15)->change();

        });
    }
};
