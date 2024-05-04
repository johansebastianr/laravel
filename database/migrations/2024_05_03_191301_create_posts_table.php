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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('body');

            //creamos el campo para albergar la llave foranea
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoría_id')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->OnDelete('set null');

            $table->foreign('categoría_id')
                ->references('id')
                ->on('categorías')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
