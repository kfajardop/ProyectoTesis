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
        Schema::table('parte_involucrada_casos', function (Blueprint $table) {
            $table->foreign(['caso_id'], 'fk_partes_involucradas_casos1')->references(['id'])->on('casos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_partes_involucradas_partes_tipo1')->references(['id'])->on('partes_tipo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parte_involucrada_casos', function (Blueprint $table) {
            $table->dropForeign('fk_partes_involucradas_casos1');
            $table->dropForeign('fk_partes_involucradas_partes_tipo1');
        });
    }
};
