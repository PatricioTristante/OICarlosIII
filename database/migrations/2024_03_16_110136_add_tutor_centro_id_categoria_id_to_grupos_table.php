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
        Schema::table('grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('tutor');
            $table->foreign('tutor')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('centro_id');
            $table->foreign('centro_id')->references('id')->on('centros')->onDelete('cascade');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grupos', function (Blueprint $table) {
            $table->dropForeign('grupos_tutor_foreign');
            $table->dropColumn('tutor_id');
            $table->dropForeign('grupos_centro_id_foreign');
            $table->dropColumn('centro_id');
            $table->dropForeign('grupos_categoria_id_foreign');
            $table->dropColumn('categoria_id');
        });
    }
};
