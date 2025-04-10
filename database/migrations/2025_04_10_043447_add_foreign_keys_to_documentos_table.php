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
        Schema::table('documentos', function (Blueprint $table) {
            $table->foreign(['bitacora_documento_id'], 'fk_documentos_bitacora_documentos1')->references(['id'])->on('bitacora_documentos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['estado_id'], 'fk_documentos_documento_estados1')->references(['id'])->on('documento_estados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_documentos_documento_tipos1')->references(['id'])->on('documento_tipos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['usuario_id'], 'fk_documentos_usuarios1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropForeign('fk_documentos_bitacora_documentos1');
            $table->dropForeign('fk_documentos_documento_estados1');
            $table->dropForeign('fk_documentos_documento_tipos1');
            $table->dropForeign('fk_documentos_usuarios1');
        });
    }
};
