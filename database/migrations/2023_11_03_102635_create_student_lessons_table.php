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
        Schema::create('student_lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('grade_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('count')->default(1);
            // $table->integer('claimed_3')->default(0);
            // $table->integer('claimed_5')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_lessons');
    }
};
