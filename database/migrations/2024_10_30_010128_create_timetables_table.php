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
        Schema::create('timetables', function (Blueprint $table) {
            $table->increments ('id');
            $table->unsignedInteger ('user_id')->nullable();
            $table->unsignedInteger ('subject_id')->nullable();
            $table->unsignedInteger ('day_id')->nullable();
            $table->unsignedInteger ('hall_id')->nullable();
            $table->unsignedInteger ('group_id')->nullable();
            $table->string ('time_from')->nullable();
            $table->string ('time_to')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
