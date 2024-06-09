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
        Schema::create('game_instructions', function (Blueprint $table) {
            $table->id();
            $table->string('audio')->nullable();
            $table->string('content')->nullable();
            $table->integer('game_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('round_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_instructions');
    }
};
