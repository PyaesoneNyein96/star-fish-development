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
        Schema::create('student_login_bonuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            // $table->foreignId('login_bonuses_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamp('date')->nullable();
            $table->integer('day_count')->nullable();
            $table->integer('claim')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_login_bonuses');
    }
};
