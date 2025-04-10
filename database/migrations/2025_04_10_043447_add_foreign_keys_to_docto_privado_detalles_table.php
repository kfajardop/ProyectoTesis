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
        Schema::table('docto_privado_detalles', function (Blueprint $table) {
            $table->foreign(['contrato_id'], 'fk_docto_privado_detalles_docto_privado_contratos1')->references(['id'])->on('docto_privado_contratos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['documento_id'], 'fk_docto_privado_detalles_documentos1')->references(['id'])->on('documentos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('docto_privado_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_docto_privado_detalles_docto_privado_contratos1');
            $table->dropForeign('fk_docto_privado_detalles_documentos1');
        });
    }
};
