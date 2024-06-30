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
        Schema::create('Magazijn', function (Blueprint $table) {
            $table->id();
            $table->date('Ontvangstdatum');
            $table->date('Uitleveringsdatum')->nullable();
            $table->string('VerpakkingsEenheid', 20);
            $table->bigInteger('Aantal');
            $table->boolean('IsActief')->default(1);
            $table->string('Opmerking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Magazijn');
    }
};
