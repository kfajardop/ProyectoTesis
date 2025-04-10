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
        Schema::table('parte_involucrada_documentos', function (Blueprint $table) {
            $table->foreign(['documento_id'], 'fk_partes_involucradas_copy1_documentos1')->references(['id'])->on('documentos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_partes_involucradas_partes_tipo10')->references(['id'])->on('partes_tipo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parte_involucrada_documentos', function (Blueprint $table) {
            $table->dropForeign('fk_partes_involucradas_copy1_documentos1');
            $table->dropForeign('fk_partes_involucradas_partes_tipo10');
        });
    }
};
