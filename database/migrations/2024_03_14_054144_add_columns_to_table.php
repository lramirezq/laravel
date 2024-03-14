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
        Schema::table('documents', function (Blueprint $table) {
            //agregar columnas para guardar ruta a archivos descargados
            $table->string('path_pdf')->nullable();;
            $table->integer('path_xml')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            //drop columns
            $table->dropColumn('path_pdf');
            $table->dropColumn('path_xml');
        });
    }
};
