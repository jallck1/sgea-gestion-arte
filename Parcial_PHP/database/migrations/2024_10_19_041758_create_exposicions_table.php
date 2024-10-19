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
        Schema::create('exposicions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fecha_inicio', 10);
            $table->string('fecha_fin', 10);
            $table->string('ubicacion', 10);
            $table->string('nombre_evento', 10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposicions');
    }
};
