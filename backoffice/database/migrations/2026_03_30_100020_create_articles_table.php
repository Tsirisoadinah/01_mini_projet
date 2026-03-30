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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('Id_articles');
            $table->string('Titre', 500);
            $table->string('Introduction', 100);
            $table->string('Contenu', 500);
            $table->string('image', 100)->nullable();
            $table->dateTime('creation');
            $table->unsignedBigInteger('Id_Categorie');

            $table->foreign('Id_Categorie')
                ->references('Id_Categorie')
                ->on('Categorie')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
