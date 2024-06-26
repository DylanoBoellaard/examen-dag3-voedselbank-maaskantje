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
        Schema::create('eetwens', function (Blueprint $table) {
            $table->id();
            $table->string('naam')->max(100);
            $table->string('omschrijving')->max(500);
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
        Schema::dropIfExists('eetwens');
    }
};
