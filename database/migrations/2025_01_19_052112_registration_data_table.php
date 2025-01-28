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
        Schema::create('participant', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('group_name');
            $table->string('status');
            $table->string('wa_number');
            $table->string('line_id');
            $table->string('github_id');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('binusian_flazz_card')->nullable();
            $table->string('cv')->nullable();
            $table->string('non_binusian_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
