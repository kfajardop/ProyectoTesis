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
        Schema::create('docto_privado_detalles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha');
            $table->string('comentario')->nullable();
            $table->integer('documento_id')->index('fk_docto_privado_detalles_documentos1_idx');
            $table->integer('contrato_id')->index('fk_docto_privado_detalles_docto_privado_contratos1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docto_privado_detalles');
    }
};
