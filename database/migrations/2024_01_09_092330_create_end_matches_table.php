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
        Schema::connection('secondary_mysql')->create('end_matches', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('grade_id');
            $table->integer('lesson_id');
            $table->integer('unit_id');
            $table->integer('game_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('secondary_mysql')->dropIfExists('end_matches');
    }
};
