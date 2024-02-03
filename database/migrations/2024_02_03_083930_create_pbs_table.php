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
        Schema::create('bps', function (Blueprint $table) {
            $table->id();
            $table->string('Denomination');
            $table->string('Classe');
            $table->string('CodeP');
            $table->string('CodeC')->unique();
            $table->string('Ccp');
            $table->string('IdM');
            $table->string('IdT');
            $table->ipAddress('IpA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbs');
    }
};
