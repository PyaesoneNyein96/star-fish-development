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
        Schema::create('answer_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('round_id');
            $table->text('answer')->nullable();
            $table->text('correct_answer')->nullable();
            // $table->string('unique_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_contents');
    }
};
