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
        Schema::create('student__modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_student')->constrained('users');
            $table->foreignId('id_module')->constrained('modules');
            $table->float('Note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student__modules');
    }
};
