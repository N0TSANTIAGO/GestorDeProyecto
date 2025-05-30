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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('correo', 255)->unique();
            $table->unsignedBigInteger('institucion_id')->nullable();
            $table->unsignedBigInteger('facultad_id')->nullable();
            $table->unsignedBigInteger('departamento_id')->nullable();
            // $table->unsignedBigInteger('asignatura_id')->nullable(); // Considerar tabla pivote para N:M
            $table->timestamps();

            $table->foreign('institucion_id')
                  ->references('id')->on('instituciones')
                  ->onDelete('set null');
            $table->foreign('facultad_id')
                  ->references('id')->on('facultades')
                  ->onDelete('set null');
            $table->foreign('departamento_id')
                  ->references('id')->on('departamentos')
                  ->onDelete('set null');
            // Si un estudiante se matricula en UNA asignatura directamente (1:N):
            // $table->foreign('asignatura_id')
            //       ->references('id')->on('asignaturas')
            //       ->onDelete('set null');
            // Es más común una tabla 'estudiante_asignatura' para una relación N:M
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
