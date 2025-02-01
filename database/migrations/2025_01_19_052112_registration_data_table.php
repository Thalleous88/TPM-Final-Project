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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('group_id')->references('id')->on('groups')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('status')->default('binusian'); // 'binusian' or 'non-binusian'
            $table->string('wa_number');
            $table->string('line_id');
            $table->string('github_id');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('binusian_flazz_card')->nullable(); // Binusian users only
            $table->string('cv')->nullable(); // Binusian users only
            $table->string('non_binusian_card')->nullable(); // Non-binusian users only
            $table->boolean('is_leader'); // True if the participant is a group leader
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
