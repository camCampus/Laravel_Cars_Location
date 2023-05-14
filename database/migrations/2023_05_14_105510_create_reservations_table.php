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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('license_id');
            $table->string('vehicle_id');
            $table->date('location_start');
            $table->date('location_end');
            $table->integer('estimate_km');
            $table->float('estimate_price');
            $table->integer('actual_km')->nullable();
            $table->integer('acompte')->nullable();
            $table->timestamps();

            $table->foreign('license_id')->references('license_number')->on('users');
            $table->foreign('vehicle_id')->references('registration')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
