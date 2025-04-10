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
        Schema::table('tareas', function (Blueprint $table) {
            $table->foreign(['estado_id'], 'fk_tareas_tarea_estados1')->references(['id'])->on('tarea_estados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['prioridad_id'], 'fk_tareas_tarea_prioridades1')->references(['id'])->on('tarea_prioridades')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign('fk_tareas_tarea_estados1');
            $table->dropForeign('fk_tareas_tarea_prioridades1');
        });
    }
};
