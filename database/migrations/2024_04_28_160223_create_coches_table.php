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
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string('Número de licencia');
            $table->string('Año de modelo');
            $table->string('Hacer');
            $table->string('Modelo');
            $table->rememberToken();
            $table->timestamps();

            //creamos el campor para albergar la llave foranea
    $table->unsignedBigInteger('empleado_id')->unique();

    $table->foreign('empleado_id')
        ->references('id')
        ->on('empleados')
        ->onDelete('cascade')
        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
