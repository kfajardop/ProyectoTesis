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
        Schema::table('audiencias', function (Blueprint $table) {
            $table->foreign(['caso_id'], 'fk_audiencias_casos1')->references(['id'])->on('casos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('audiencias', function (Blueprint $table) {
            $table->dropForeign('fk_audiencias_casos1');
        });
    }
};
