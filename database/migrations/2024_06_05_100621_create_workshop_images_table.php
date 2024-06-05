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
        Schema::create('workshop_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workshop_id');
            $table->string('image_address');
            $table->string('image_alt')->nullable();
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_images');
    }
};
