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
        Schema::create('eetwenspergezin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezinId');
            $table->foreignId('eetwensId');
            $table->rememberToken();
            $table->timestamps();
        });
        // makes the foreign keys
        Schema::table('eetwenspergezin', function (Blueprint $table) {
            $table->foreign('gezinId')->references('id')->on('gezin');
            $table->foreign('eetwensId')->references('id')->on('eetwens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drops the table
        Schema::dropIfExists('eetwenspergezin');
    }
};
