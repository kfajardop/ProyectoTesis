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
        Schema::create('audiencias_has_partes_involucradas', function (Blueprint $table) {
            $table->integer('audiencias_id')->index('fk_audiencias_has_partes_involucradas_audiencias1_idx');
            $table->integer('partes_involucradas_id')->index('fk_audiencias_has_partes_involucradas_partes_involucradas1_idx');

            $table->primary(['audiencias_id', 'partes_involucradas_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiencias_has_partes_involucradas');
    }
};
