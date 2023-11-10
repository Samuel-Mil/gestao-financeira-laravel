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
        Schema::create('fluxo_caixa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type');
            $table->decimal("amount");
            $table->unsignedBigInteger('entry_account');
            $table->unsignedBigInteger('outgoing_account');
            
            $table->foreign('type')->references('id')->on('tipo_fluxo');
            $table->foreign('entry_account')->references('id')->on('conta_bancaria')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('outgoing_account')->references('id')->on('conta_bancaria')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fluxo_caixa');
    }
};
