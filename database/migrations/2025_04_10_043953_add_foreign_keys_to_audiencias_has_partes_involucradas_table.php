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
        Schema::table('audiencias_has_partes_involucradas', function (Blueprint $table) {
            $table->foreign(['audiencias_id'], 'fk_audiencias_has_partes_involucradas_audiencias1')->references(['id'])->on('audiencias')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['partes_involucradas_id'], 'fk_audiencias_has_partes_involucradas_partes_involucradas1')->references(['id'])->on('parte_involucrada_casos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('audiencias_has_partes_involucradas', function (Blueprint $table) {
            $table->dropForeign('fk_audiencias_has_partes_involucradas_audiencias1');
            $table->dropForeign('fk_audiencias_has_partes_involucradas_partes_involucradas1');
        });
    }
};
