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
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CategorieId')->references('id')->on('Categorie');
            $table->string('Naam', 60);
            $table->string('SoortAllergie', 60)->nullable();
            $table->string('Barcode', 100);
            $table->date('Houdbaarheidsdatum');
            $table->string('Omschrijving');
            $table->string('Status', 40);
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
        Schema::dropIfExists('Product');
    }
};
