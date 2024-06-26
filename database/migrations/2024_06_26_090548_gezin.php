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
        // Create table gezin
        Schema::dropIfExists('gezin');
        Schema::create('gezin', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 100);
            $table->string('code', 5)->unique();
            $table->string('omschrijving', 50);
            $table->integer('aantalVolwassenen')->nullable();
            $table->integer('aantalKinderen')->nullable();
            $table->integer('aantalBabys')->nullable();
            $table->integer('totaalAantalPersonen');
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
        Schema::dropIfExists('gezin');
    }
};
