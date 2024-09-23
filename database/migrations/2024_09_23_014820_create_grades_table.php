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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_classroom')->constrained('classrooms')->onDelete('cascade');
            $table->foreignId('id_student')->constrained('students')->onDelete('cascade');
            $table->decimal('grade', 5, 2);
            $table->string('evaluation_type', 50); // Tipo de evaluación (examen, proyecto, etc.)
            $table->date('date'); // Fecha de la evaluación
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
