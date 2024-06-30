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
        //  creates the table
        Schema::create('persoon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezinId')->nullable();
            $table->string('voornaam')->max(50);
            $table->string('tussenvoegsel')->max(20)->nullable();
            $table->string('achternaam')->max(50);
            $table->date('geboortedatum')->max(20);
            $table->string('typePersoon')->max(20);
            $table->boolean('isVertegenwoordiger')->max(2)->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        // makes the foreign keys
        Schema::table('persoon', function (Blueprint $table) {
            $table->foreign('gezinId')->references('id')->on('gezin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drops the table
        Schema::dropIfExists('persoon');
    }
};
