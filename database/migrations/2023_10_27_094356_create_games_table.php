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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('instructionGIF')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('unit_id')->nullable()->constrained();
            $table->integer('status')->default(1);
            $table->index(['id','unit_id'],'games_id_unit_id_index');
            // $table->index('id', 'games_id_index');
            // $table->index('category_id', 'games_category_id_index');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
