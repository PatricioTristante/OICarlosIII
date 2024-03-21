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
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 50);
            $table->unsignedBigInteger('categorias_ediciones_id');
            $table->foreign('categorias_ediciones_id')->references('id')->on('categorias_ediciones')->onDelete('cascade');
            $table->unsignedBigInteger('patrocinadores_id');
            $table->foreign('patrocinadores_id')->references('id')->on('patrocinadores')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas');
    }
};
