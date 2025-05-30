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
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('tipo_proyecto_id');
            $table->timestamps();

            $table->foreign('tipo_proyecto_id')
                  ->references('id')->on('tipos_proyecto')
                  ->onDelete('restrict'); // Un proyecto debe tener un tipo válido
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
