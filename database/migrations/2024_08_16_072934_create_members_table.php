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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('place_of_birth');
            $table->date('dob');
            $table->text('full_address');
            $table->string('nationality');
            $table->string('city_country');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('password');
            $table->string('membership_type');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_delete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
