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
            $table->string('grade_id')->nullable();
            $table->integer('otp')->nullable();

            $table->string('token')->nullable();
            $table->string('deviceId')->nullable();
            $table->string('isAuth')->default(0);
            $table->integer('agreeToPolicy')->default(0);
            $table->string('point')->nullable();
            $table->integer('status')->default(0);
            $table->string('isLocal')->default(1);
            $table->string('isSubscriber')->default(0);

            $table->string('password');

            $table->foreignId('subscription_plans_id')->nullable()->constrained();
            // $table->foreign('subscription_plans_id')->references('id')->on('subscription_plans')->onDelete('cascade');

            $table->foreignId('country_id')->nullable()->constrained();
            // $table->foreign('country_id')->references('id')->on('countries')
            // ->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
