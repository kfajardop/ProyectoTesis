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
        Schema::table('casos', function (Blueprint $table) {
            $table->foreign(['bitacora_caso_id'], 'fk_casos_bitacora_casos1')->references(['id'])->on('bitacora_casos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['estado_id'], 'fk_casos_caso_estados1')->references(['id'])->on('caso_estados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_casos_tipos_casos1')->references(['id'])->on('caso_tipos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['usuario_id'], 'fk_casos_usuarios1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('casos', function (Blueprint $table) {
            $table->dropForeign('fk_casos_bitacora_casos1');
            $table->dropForeign('fk_casos_caso_estados1');
            $table->dropForeign('fk_casos_tipos_casos1');
            $table->dropForeign('fk_casos_usuarios1');
        });
    }
};
