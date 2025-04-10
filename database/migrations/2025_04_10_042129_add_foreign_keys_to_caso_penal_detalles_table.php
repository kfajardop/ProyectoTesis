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
        Schema::table('caso_penal_detalles', function (Blueprint $table) {
            $table->foreign(['delito_id'], 'fk_caso_penal_detalles_caso_penal_delitos1')->references(['id'])->on('caso_penal_delitos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['etapa_id'], 'fk_caso_penal_detalles_caso_penal_etapas1')->references(['id'])->on('caso_penal_etapas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['caso_id'], 'fk_caso_penal_detalles_casos1')->references(['id'])->on('casos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caso_penal_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_caso_penal_detalles_caso_penal_delitos1');
            $table->dropForeign('fk_caso_penal_detalles_caso_penal_etapas1');
            $table->dropForeign('fk_caso_penal_detalles_casos1');
        });
    }
};
