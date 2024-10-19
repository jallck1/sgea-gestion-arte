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
        Schema::create('obra_artes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           # $tabke->artista_id();
            $table->string('titulo', 50);
            $table->strign('año', 4);
            $table->string('tecnica', 50);
            $table->string('dimensiones', 30);
            $table->string('descripcion', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obra_artes');
    }
};
