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
        Schema::connection('mysql')->create('local_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickName')->nullable();
            $table->string('phone')->uniqid();
            $table->string('age');
            $table->string('profile_picture')->nullable();
            $table->string('role')->nullable();
            $table->string('grade')->nullable();
            $table->integer('otp')->nullable();
            $table->string('token')->nullable();
            $table->string('deviceId')->nullable();
            $table->string('isAuth')->default(0);
            $table->integer('agreeToPolicy')->default(0);
            $table->string('point')->nullable();
            $table->integer('status')->default(0);
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('password');
            $table->string('isSubscriber')->default(0);
            $table->foreignId('subscription_plans_id')->nullable();
            $table->foreign('subscription_plans_id')->references('id')->on('subscription_plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_students');
    }
};
