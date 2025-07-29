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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string("company", 50);
            $table->string("departure_station", 50);
            $table->string("arrival_station", 50);
            $table->dateTime("departure_time", 0);
            $table->dateTime("arrival_time");
            $table->integer("train_number");
            $table->smallInteger("total_carriages");
            $table->boolean("on_time");
            $table->boolean("canceled");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
