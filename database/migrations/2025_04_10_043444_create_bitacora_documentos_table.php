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
        Schema::create('bitacora_documentos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descripcion');
            $table->unsignedBigInteger('usuario_id')->index('fk_bitacora_documentos_usuarios1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacora_documentos');
    }
};
