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
        Schema::create('docto_publico_detalles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('no_escritura', 20);
            $table->date('fecha_escritura');
            $table->string('comentario')->nullable();
            $table->integer('documento_id')->index('fk_docto_publico_detalles_documentos1_idx');
            $table->integer('escritura_id')->index('fk_docto_publico_detalles_docto_publico_escrituras1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docto_publico_detalles');
    }
};
