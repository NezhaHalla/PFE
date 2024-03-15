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
        Schema::create('student_soumestres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_soumestre')->constrained('soumestres');
            $table->foreignId('id_student')->constrained('users');
            $table->float('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_soumestres');
    }
};
