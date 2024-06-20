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
        Schema::create('ap_materiels', function (Blueprint $table) {
            $table->id();
            $table->string("Designation",50);
            $table->string("Num_s",100);
            $table->string("Code_b",100)->nullable();
            $table->integer("Marque_id")->nullable();
            $table->integer("Modele_id")->nullable();
            $table->integer("Arrivage_id")->nullable();
            $table->integer("Owner_id")->nullable();
            $table->integer("Is_Consomable");
            $table->integer("Quantity")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ap_materiels');
    }
};
