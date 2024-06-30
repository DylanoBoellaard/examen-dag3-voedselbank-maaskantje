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
        // creates the table
        Schema::create('gezin', function (Blueprint $table) {
            $table->id();
            $table->string('naam')->max(100);
            $table->string('code')->max(10)->unique();
            $table->string('omschrijving')->max(500);
            $table->integer('aantalVolwassenen')->max(10);
            $table->integer('aantalKinderen')->max(10);
            $table->integer('aantalBabys')->max(10);
            $table->integer('totaalAantalPersonen')->max(10);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drops the table
        Schema::dropIfExists('gezin');
    }
};
