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
        Schema::create('assessment_finish_data', function (Blueprint $table) {
            $table->id();

            $table->integer("student_id");
            $table->integer("assess_name");

            $table->integer("game_1")->default(0);
            $table->integer("game_2")->default(0);
            $table->integer("game_3")->default(0);
            $table->integer("game_4")->default(0);
            $table->integer("game_5")->default(0);
            $table->integer("game_6")->default(0);
            $table->integer("game_7")->default(0);
            $table->integer("game_8")->default(0);
            $table->integer("game_9")->default(0);
            $table->integer("game_10")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_finish_data');
    }
};
