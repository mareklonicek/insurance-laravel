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
        Schema::create('insureeDetails', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('zip'); // strings to preserve leading zeros
            $table->string('street');
            $table->string('street_number');
            $table->string('city');
            $table->string('country');
            $table->string('birth_number');
            $table->string('bank_account');
            $table->foreignId("insuree_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insureeDetails');
    }
};
