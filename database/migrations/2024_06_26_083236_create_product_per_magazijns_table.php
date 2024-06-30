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
        Schema::create('ProductPerMagazijn', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ProductId')->references('id')->on('Product');
            $table->foreignId('MagazijnId')->references('id')->on('Magazijn');
            $table->string('Locatie', 60);
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
        Schema::dropIfExists('ProductPerMagazijn');
    }
};
