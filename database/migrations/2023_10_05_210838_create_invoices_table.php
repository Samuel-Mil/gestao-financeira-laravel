<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('numero_fatura')->unique();
            $table->date('data_fatura');
            $table->date('data_vencimento');
            $table->string('nome_emitente');
            $table->string('endereco_emitente');
            $table->string('cpf_cnpj_emitente');
            $table->string('nome_cliente');
            $table->string('endereco_cliente');
            $table->string('cpf_cnpj_cliente');
            $table->text('descricao_item');
            $table->integer('quantidade');
            $table->decimal('preco_unitario', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('impostos', 10, 2);
            $table->decimal('desconto', 10, 2)->nullable();
            $table->decimal('total', 10, 2);
            $table->string('metodo_pagamento');
            $table->string('condicoes_pagamento');
            $table->string('numero_pedido')->nullable();
            $table->text('notas')->nullable();
            $table->enum('status', ['pendente', 'pago', 'atrasado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};


