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
        Schema::create('conta_bancaria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number');
            $table->string('holder_name');
            $table->unsignedBigInteger('type');
            $table->string('opening_date');
            $table->string("agency");
            $table->string("agency_identification");
            $table->unsignedBigInteger("status");
            $table->text("info_contact");
            $table->text("notes");
            $table->foreign('type')->references('id')->on('tipo_conta_bancaria')->onUpdate('cascade');
            $table->foreign('status')->references('id')->on('status_conta_bancaria')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conta_bancaria');
    }
};
