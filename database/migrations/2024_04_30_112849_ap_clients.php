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

        Schema::create('ap_clients', function (Blueprint $table) {
        $table->id();
        $table->string('Denomination');
        $table->string('Activite');
        $table->string('Rib');
        $table->string('Telephone');
        $table->string('Address');
        $table->string('Etat');
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
