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

        if(!Schema::connection("mysql_2")->hasTable('global_students')){

        Schema::connection("mysql_2")->create('global_students', function (Blueprint $table) {
           $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('nick_name')->nullable();
            $table->integer('otp')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('points')->default(0);
            $table->integer('status')->default(1);
            $table->integer('grade')->nullable();
            $table->integer('isAuth')->default(0);
            $table->integer('isSubscribe')->default(0);
            $table->integer('age')->nullable();
            $table->string('country')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_students');
    }
};
