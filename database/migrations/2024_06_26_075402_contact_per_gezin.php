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
        Schema::create('contact_Per_Gezin', function (Blueprint $table) {
            $table->id();
            $table->integer('gezinId')->constrained()->references('id')->on('gezin');
            $table->integer('contactId')->constrained()->references('id')->on('contact');
            $table->timestamps();
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
