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
        Schema::create('journaliste_article', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_articles');
            $table->unsignedBigInteger('Id_Journaliste');

            $table->primary(['Id_articles', 'Id_Journaliste']);

            $table->foreign('Id_articles')
                ->references('Id_articles')
                ->on('articles')
                ->onDelete('cascade');

            $table->foreign('Id_Journaliste')
                ->references('Id_Journaliste')
                ->on('Journaliste')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journaliste_article');
    }
};
