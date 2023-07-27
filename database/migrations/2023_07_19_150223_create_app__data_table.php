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
        Schema::create('app__data', function (Blueprint $table) {
            $table->enum('months', ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'])->primary();
            $table->string('rating',800);
            $table->string('response_time',800);
            $table->string('resolves_issues',800);
            $table->string('users_in_courses',800);
            $table->string('gate_scanners',800);
            $table->string('cam_hrs',800);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app__data');
    }
};
