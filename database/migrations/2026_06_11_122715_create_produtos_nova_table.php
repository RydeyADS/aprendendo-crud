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

            //Marca do produto
            $table->string('marca');

             // Nome da marca do produto
            $table->string('modelo');

            //Cor do produto
            $table->string('cor');

            //Memoria RAM
            $table->integer('memoria_ram')->default(8);

            //Quantidade de armazenamento do produto
            $table->integer('armazenamento');

            //Numero de reistro do aparelho
            $table->string('imei', 15)->unique();

            // Aparelho novo ou usado
            $table->string('estado');

            // Preço do produto
            // 10 = total de dígitos
            // 2 = casas decimais
            $table->decimal('preco', 10, 2);

             // Quantidade disponível
            // Começa com 0 por padrão
            $table->integer('quantidade')->default(0);

            //Preço que a loja pagou no aparelho
            $table->decimal('preco_de_compra',10,2);

            //preço na qual a loja ta passando
            // para o consumidor final
            $table->decimal('preco_de_venda', 10,2);

             // Estoque
            // Começa com 0 por padrão
            $table->integer('estoque')->default(0);


            $table->string('forma_de_pagamento');



            // data de criação e de atualização
            $table->timestamps();

            //cria a coluna deleted_at.
            $table->softDeletes();
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

