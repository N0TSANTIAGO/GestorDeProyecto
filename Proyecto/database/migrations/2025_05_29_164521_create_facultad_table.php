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
        Schema::create('facultad', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 255);
            $table->unsignedBigInteger('institucion_id');
            $table->timestamps();
            $table->foreign('institucion_id')
                  ->references('id')->on('institucion')
                  ->onDelete('cascade'); // o 'restrict' si prefieres
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultad');
    }
};
