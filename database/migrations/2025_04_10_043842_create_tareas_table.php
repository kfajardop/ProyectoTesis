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
        Schema::create('tareas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 55);
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('prioridad_id')->index('fk_tareas_tarea_prioridades1_idx');
            $table->integer('estado_id')->index('fk_tareas_tarea_estados1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
