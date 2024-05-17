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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreDOC');
            $table->dateTime('fechaSubidaDOC');
            $table->foreignId('tipo_de_documento_id')->constrained('tipos_de_documento', 'id');
            $table->foreignId('autor_id')->constrained('autores', 'id');
            $table->foreignId('encargado_id')->constrained('encargados', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
