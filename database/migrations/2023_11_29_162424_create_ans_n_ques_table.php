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
        Schema::create('ans_n_ques', function (Blueprint $table) {
            $table->id();
            $table->integer('round')->nullable();
            $table->integer('game_id')->nullable();
            $table->string('q_image')->nullable();
            $table->string('q_audio')->nullable();
            $table->string('q_content')->nullable();
            $table->string('q_conver')->nullable();

            $table->string('a_image')->nullable();
            $table->string('a_audio')->nullable();
            $table->string('a_content')->nullable();
            $table->string('a_conver')->nullable();

            $table->string('type')->nullable();

            $table->string('isLocal')->nullable();
            $table->string('background')->nullable();

            $table->string('q_extra')->nullable();
            $table->string('a_extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ans_n_ques');
    }
};
