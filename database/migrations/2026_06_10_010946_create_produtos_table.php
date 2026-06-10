<?php

// Importa a classe de migrations
use Illuminate\Database\Migrations\Migration;

// Permite criar colunas na tabela
use Illuminate\Database\Schema\Blueprint;

// Responsável por executar comandos no banco
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /**
     * Executado quando rodamos:
     * php artisan migrate
     *
     * Cria a tabela produtos.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {

             // Chave primária auto incremento
            $table->id();

             // Nome do produto
            $table->string('nome');

            // Preço do produto
            // 10 = total de dígitos
            // 2 = casas decimais
            $table->decimal('preco', 10, 2);

             // Quantidade disponível
            // Começa com 0 por padrão
            $table->integer('quantidade')->default(0);

             // Estoque
            // Começa com 0 por padrão
            $table->integer('estoque')->default(0);

            // data de criação e de atualização
            $table->timestamps();
        });
    }

    
     /**
     * Executado quando rodamos:
     * php artisan migrate:rollback
     *
     * Remove a tabela produtos.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
