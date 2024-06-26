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
            $table->string('code', 4)->unique();
            $table->string('omschrijving', 50);
            $table->integer('aantalVolwassenen');
            $table->integer('aantalKinderen');
            $table->integer('aantalBabys');
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
