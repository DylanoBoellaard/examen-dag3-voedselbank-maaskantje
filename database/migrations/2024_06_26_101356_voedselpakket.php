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
        Schema::create('voedselpakket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezinId');
            $table->integer('pakketnummer');
            $table->date('datumsamenstelling');
            $table->date('datumuitgifte');
            $table->string('status')->max(20);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('voedselpakket', function (Blueprint $table) {
            $table->foreign('gezinId')->references('id')->on('gezin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voedselpakket');
    }
};
