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
        Schema::create('productperleverancier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancierid')
                ->references('id')
                ->on('leverancier')
                ->onDelete('cascade');
            $table->foreignId('productid')
                ->references('id')
                ->on('product')
                ->onDelete('cascade');
            $table->date('datumaangeleverd');
            $table->date('datumeerstvolgendelevering');
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
    }
};
