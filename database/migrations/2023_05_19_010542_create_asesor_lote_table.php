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
       
        Schema::create('asesor_lote', function (Blueprint $table) {
            $table->id('id_alote');
            $table->unsignedBigInteger('id_asesor');
            $table->unsignedBigInteger('id_lote');
            $table->date('fecha');
            $table->string('img');
            $table->foreign('id_asesor')->references('id_asesor')->on('asesor');
            $table->foreign('id_lote')->references('id_lote')->on('lote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesor_lote');
    }
};
