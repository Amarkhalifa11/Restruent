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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('image');
            $table->string('description');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('advan1');
            $table->string('advan2')->nullable();
            $table->string('advan3')->nullable();
            $table->string('advan4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
