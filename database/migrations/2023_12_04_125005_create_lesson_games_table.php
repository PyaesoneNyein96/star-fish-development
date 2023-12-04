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
        Schema::create('lesson_games', function (Blueprint $table) {
            $table->id();
            $table->integer("grade_id");
            $table->integer("lesson");
            $table->string("game_name");
            $table->string("subunit_name")->nullable();
            $table->integer("category_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_games');
    }
};
