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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encargado_id')->constrained('encargados', 'id');
            $table->foreignId('reserva_id')->constrained('reservas', 'id');
            $table->date('fechaPrestamoPRE');
            $table->date('fechaDevolucionPRE');
            $table->date('fechaLimitePRE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
