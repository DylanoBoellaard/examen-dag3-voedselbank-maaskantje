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
        //create table contact_per_levrancier
        Schema::create('contactperleverancier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancierid')
                ->references('id')
                ->on('leverancier')
                ->onDelete('cascade');
            $table->foreignId('contactid')
                ->references('id')
                ->on('contact')
                ->onDelete('cascade');
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
        Schema::dropIfExists('contactperleverancier');
    }
};
