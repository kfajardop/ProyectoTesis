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
        Schema::create('casos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tipo_id')->index('fk_casos_tipos_casos1_idx');
            $table->integer('estado_id')->index('fk_casos_caso_estados1_idx');
            $table->unsignedBigInteger('usuario_id')->index('fk_casos_usuarios1_idx');
            $table->integer('bitacora_caso_id')->index('fk_casos_bitacora_casos1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casos');
    }
};
