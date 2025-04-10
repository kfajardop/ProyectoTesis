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
        Schema::table('caso_familiar_detalles', function (Blueprint $table) {
            $table->foreign(['caso_id'], 'fk_caso_familiar_detalles_casos1')->references(['id'])->on('casos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caso_familiar_detalles', function (Blueprint $table) {
            $table->dropForeign('fk_caso_familiar_detalles_casos1');
        });
    }
};
