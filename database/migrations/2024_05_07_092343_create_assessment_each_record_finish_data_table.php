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
        Schema::create('assessment_each_record_finish_data', function (Blueprint $table) {
            $table->id();
            $table->integer("student_id");
            $table->integer("assess_id");
            $table->integer("assess_name");
            $table->integer("grade_id");

            // $table->integer('total_point')->nullable();
            // $table->integer('timer')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_each_record_finish_data');
    }
};
