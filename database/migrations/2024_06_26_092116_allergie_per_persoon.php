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
        // Create table allergiePerPersoon
        Schema::dropIfExists('allergiePerPersoon');
        Schema::create('allergiePerPersoon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persoonId') // Declare foreign key
                ->references('id')
                ->on('persoon')
                ->onDelete('cascade'); // Cascade = if record in referenced table gets deleted, all related records in the current table will also be deleted
            $table->foreignId('allergieId') // Declare foreign key
                ->references('id')
                ->on('allergie')
                ->onDelete('cascade');
            $table->boolean('isActief')->default(true);
            $table->string('opmerkingen', 250)->nullable();
            $table->timestamps(6);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergiePerPersoon');
    }
};
