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
        Schema::table('assessment_each_record_finish_data', function (Blueprint $table) {
            $table->integer('total_point')->nullable();
            $table->integer('timer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assessment_each_record_finish_data', function (Blueprint $table) {
             $table->dropColumn('total_point');
             $table->dropColumn('timer');
        });
    }
};
