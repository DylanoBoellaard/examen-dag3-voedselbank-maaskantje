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
        // Create table persoon
        Schema::dropIfExists('persoon');
        Schema::create('persoon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezinId') // Declare foreign key
                ->nullable()
                ->references('id')
                ->on('gezin')
                ->onDelete('cascade'); // Cascade = if record in referenced table gets deleted, all related records in the current table will also be deleted
            $table->string('voornaam', 100);
            $table->string('tussenvoegsel', 50)->nullable();
            $table->string('achternaam', 100);
            $table->date('geboortedatum');
            $table->string('typePersoon', 50);
            $table->boolean('isVertegenwoordiger')->default(0);
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
        Schema::dropIfExists('persoon');
    }
};
