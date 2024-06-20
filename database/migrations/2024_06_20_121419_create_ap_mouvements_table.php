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
        Schema::create('ap_mouvements', function (Blueprint $table) {
            $table->id();
            $table->string("Type");
            $table->string("Date");
            $table->string("Expediteur");
            $table->string("Destinataire");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ap_mouvements');
    }
};
