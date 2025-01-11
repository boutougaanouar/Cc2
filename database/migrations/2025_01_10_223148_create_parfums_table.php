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
        Schema::create('parfums', function (Blueprint $table) {
            $table->bigIncrements('CodPar');
            $table->string('NomPar');
            $table->decimal('PrixVente', 10, 2);
            $table->date('DateProduction');
            $table->date('DateSortie');
            $table->unsignedBigInteger('NumLabo');
            $table->foreign('NumLabo')->references('NumLabo')->on('laboratoires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parfums');
    }
};
