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
        Schema::table('categorias_ediciones', function (Blueprint $table) {
            $table->unsignedBigInteger('edicion_id');
            $table->foreign('edicion_id')->references('id')->on('ediciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categorias_ediciones', function (Blueprint $table) {
            $table->dropForeign('categorias_ediciones_edicion_id_foreign');
            $table->dropColumn('edicion_id');
        });
    }
};
