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
        Schema::table('eventos', function (Blueprint $table) {
            // Cambiar el campo fecha_evento a un campo TIMESTAMP
            $table->datetime('fecha_evento')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eventos', function (Blueprint $table) {
            // Revertir el cambio y cambiar el campo fecha_evento a un campo DATE
            $table->date('fecha_evento')->nullable()->change();
        });
    }
};