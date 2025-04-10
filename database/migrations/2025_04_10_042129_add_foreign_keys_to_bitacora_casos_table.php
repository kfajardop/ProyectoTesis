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
        Schema::table('bitacora_casos', function (Blueprint $table) {
            $table->foreign(['usuario_id'], 'fk_bitacora_casos_usuarios1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bitacora_casos', function (Blueprint $table) {
            $table->dropForeign('fk_bitacora_casos_usuarios1');
        });
    }
};
