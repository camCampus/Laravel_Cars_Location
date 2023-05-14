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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->string('registration')->primary();
            $table->enum('vehicle_type',['VOITURE', 'MOTO', 'UTILITAIRE'])->default('UTILITAIRE');
            $table->enum('brand', ['renault', 'peugeot', 'volkswagen', 'yamaha'])->default('volkswagen');
            $table->enum('model', ['208', 'clio','transporter', 'mt07'])->default('208');
            $table->enum('status', ['reservation', 'disponible', 'en-location', 'entretiens'])->default('disponible');
            $table->integer('kilometer');
            $table->integer('tax_horses');
            $table->enum('color', ['blanc', 'noir', 'rouge', 'gris'])->default('blanc');
            $table->integer('volumetric_size')->nullable();
            $table->integer('cylinder')->nullable();
            $table->timestamps();

            $table->foreign('vehicle_type')->references('type')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
