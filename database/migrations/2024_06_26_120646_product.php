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
        //
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('categorieid');
            $table->string('naam');
            $table->string('soortallergie');
            $table->bigInteger('barcode');
            $table->date('houdbaarheidsdatum');
            $table->string('omschrijving');
            $table->string('status');
            $table->timestamps();
            $table->engine('InnoDB');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('product');
    }
};