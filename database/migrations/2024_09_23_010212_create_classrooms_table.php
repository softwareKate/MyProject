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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_subject')->constrained('subjects')->onDelete('cascade');
            $table->foreignId('id_teacher')->constrained('teachers')->onDelete('cascade');
            $table->string('nombre');
            $table->char('nivel', 1);
            $table->char('grado', 1);
            $table->char('seccion', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
