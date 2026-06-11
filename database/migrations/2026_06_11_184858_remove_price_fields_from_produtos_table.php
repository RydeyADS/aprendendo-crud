<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn([
                'preco',
                'preco_de_compra',
                'preco_de_venda',
                'forma_de_pagamento'
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco', 10, 2)->nullable();
            $table->decimal('preco_de_compra', 10, 2)->nullable();
            $table->decimal('preco_de_venda', 10, 2)->nullable();
            $table->string('forma_de_pagamento')->nullable();
        });
    }
};
