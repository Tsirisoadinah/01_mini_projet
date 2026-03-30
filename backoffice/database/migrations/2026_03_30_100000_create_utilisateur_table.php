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
        Schema::create('Utilisateur', function (Blueprint $table) {
            $table->id('Id_Utilisateur');
            $table->string('Nom', 50);
            $table->string('email', 50)->unique();
            $table->string('mdp', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Utilisateur');
    }
};
