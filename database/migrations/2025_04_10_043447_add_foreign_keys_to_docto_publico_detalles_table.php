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
        Schema::table('docto_publico_detalles', function (Blueprint $table) {
            $table->foreign(['escritura_id'], 'fk_docto_publico_detalles_docto_publico_escrituras1')->references(['id'])->on('docto_publico_escrituras')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['documento_id'], 'fk_docto_publico_detalles_documentos1')->references(['id'])->on('documentos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('docto_publico_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_docto_publico_detalles_docto_publico_escrituras1');
            $table->dropForeign('fk_docto_publico_detalles_documentos1');
        });
    }
};
