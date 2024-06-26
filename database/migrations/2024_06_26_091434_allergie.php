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
        // Create table allergie
        Schema::dropIfExists('allergie');
        Schema::create('allergie', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->string('omschrijving', 100);
            $table->string('anafylactischRisico', 50);
            $table->boolean('isActief')->default(true);
            $table->string('opmerkingen', 250)->nullable();
            $table->timestamps(6);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergie');
    }
};
