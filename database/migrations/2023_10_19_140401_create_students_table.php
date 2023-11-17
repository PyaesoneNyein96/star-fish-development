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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickName')->nullable();
            $table->string('phone')->nullable()->uniqid();
            $table->string('email')->nullable()->uniqid();
            $table->string('age');
            $table->string('profile_picture')->nullable();
            $table->string('role')->nullable();
            $table->string('grade_chosen')->nullable();
            $table->string('token')->nullable();
            $table->string('deviceId')->nullable();
            $table->string('isAuth')->default(0);
            $table->integer('agreeToPolicy')->default(0);
            $table->string('point')->default(0);
            $table->string('fixed_point')->default(0);
            $table->string('level')->default(1);
            $table->string('board')->default('silver');

            $table->integer('status')->default(0);
            $table->string('isLocal')->default(1);


            $table->string('password');
            $table->string('isSubscriber')->default(0);

            $table->foreignId('country_id')->nullable()
            ->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('city_id')->nullable()->constrained()
            ->onDelete('cascade')->onUpdate('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');


    }
};
