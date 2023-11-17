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
        Schema::create('question_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('round_id');
            $table->text('image')->nullable();
            $table->text('audio')->nullable();
            $table->text('content')->nullable();
            // $table->string('unique_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_contents');
    }
};
