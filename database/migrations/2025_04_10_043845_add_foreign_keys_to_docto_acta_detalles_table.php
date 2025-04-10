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
        Schema::table('docto_acta_detalles', function (Blueprint $table) {
            $table->foreign(['notarial_id'], 'fk_docto_acta_detalles_docto_acta_tipos1')->references(['id'])->on('docto_acta_notariales')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['documento_id'], 'fk_docto_acta_detalles_documentos1')->references(['id'])->on('documentos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('docto_acta_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_docto_acta_detalles_docto_acta_tipos1');
            $table->dropForeign('fk_docto_acta_detalles_documentos1');
        });
    }
};
