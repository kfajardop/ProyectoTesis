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
        Schema::table('caso_familiar_juicios', function (Blueprint $table) {
            $table->foreign(['detalles_id'], 'fk_caso_familiar_juicios_caso_familiar_detalles1')->references(['id'])->on('caso_familiar_detalles')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['juicio_etapas_id'], 'fk_caso_familiar_juicios_caso_familiar_juicio_etapas1')->references(['id'])->on('caso_familiar_juicio_etapas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caso_familiar_juicios', function (Blueprint $table) {
            $table->dropForeign('fk_caso_familiar_juicios_caso_familiar_detalles1');
            $table->dropForeign('fk_caso_familiar_juicios_caso_familiar_juicio_etapas1');
        });
    }
};
