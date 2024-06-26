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
        Schema::create('productpervoedselpakket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voedselpakketId');
            $table->foreignId('productId');
            $table->integer('aantalproducteneenheden');
            $table->rememberToken();
            $table->timestamps();
        });
        // makes the foreign keys
        Schema::table('productpervoedselpakket', function (Blueprint $table) {
            $table->foreign('voedselpakketId')->references('id')->on('voedselpakket');
            // $table->foreign('productId')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drops the table
        Schema::dropIfExists('productpervoedselpakket');
    }
};
