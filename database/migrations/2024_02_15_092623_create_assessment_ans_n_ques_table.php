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
        Schema::create('assessment_ans_n_ques', function (Blueprint $table) {
            $table->id();
            $table->integer('assess_id')->nullable();
            //   $table->foreignId('assess_id')->constrained()->onDelete('cascade');

            $table->integer('round')->nullable();
            $table->longText('q_image')->nullable();
            $table->longText('q_audio')->nullable();
            $table->longText('q_content')->nullable();
            $table->longText('q_conver')->nullable();

            $table->longText('a_image')->nullable();
            $table->longText('a_audio')->nullable();
            $table->longText('a_content')->nullable();
            $table->longText('a_conver')->nullable();

            $table->longText('round_instruction')->nullable();

            $table->string('background')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_ans_n_ques');
    }
};
