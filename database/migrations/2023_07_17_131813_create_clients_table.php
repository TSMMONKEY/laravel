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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 800);
            $table->string('service', 800);
            $table->string('sites', 800);
            $table->string('status', 800);
            $table->string('billed', 800);
            $table->string('paid', 800);
            $table->string('address1', 800);
            $table->string('address2', 800);
            $table->string('postalCode', 800);
            $table->string('state', 800);
            $table->string('city', 800);
            $table->string('phoneNumber', 800);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
