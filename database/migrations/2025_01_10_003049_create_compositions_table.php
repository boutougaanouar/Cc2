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
        Schema::create('compositions', function (Blueprint $table) {

            $table->id();
            $table->foreignId('parfum_id')->constrained()->cascadeOnDelete();
            $table->foreignId('produit_id')->constrained()->cascadeOnDelete();
            $table->integer('QuantiteUtilisee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compositions');
    }
};
