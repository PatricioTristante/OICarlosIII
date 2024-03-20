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
        Schema::table('pruebas', function (Blueprint $table) {
            $table->unsignedBigInteger('categorias_ediciones_id');
            $table->foreign('categorias_ediciones_id')->references('id')->on('categorias_ediciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pruebas', function (Blueprint $table) {
            $table->dropForeign('pruebas_categorias_ediciones_id_foreign');
            $table->dropColumn('categorias_ediciones_id');
        });
    }
};
