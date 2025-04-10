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
        Schema::table('personas_has_documentos', function (Blueprint $table) {
            $table->foreign(['documentos_id'], 'fk_personas_has_documentos_documentos1')->references(['id'])->on('documentos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['personas_id'], 'fk_personas_has_documentos_personas1')->references(['id'])->on('personas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personas_has_documentos', function (Blueprint $table) {
            $table->dropForeign('fk_personas_has_documentos_documentos1');
            $table->dropForeign('fk_personas_has_documentos_personas1');
        });
    }
};
