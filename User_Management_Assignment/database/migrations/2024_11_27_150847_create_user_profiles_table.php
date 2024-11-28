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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->string('user_id')->primary(); //Used the same user_id from users table as primary key here
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); //if user records are deleted this will automatically delete user_profile too
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
