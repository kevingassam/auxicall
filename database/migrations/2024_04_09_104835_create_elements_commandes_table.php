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
        Schema::create('elements_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit');
            $table->integer('prix');
            $table->integer("quantite");
            $table->timestamps();


            //relation
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete("Cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elements_commandes');
    }
};
