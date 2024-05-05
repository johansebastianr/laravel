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
        Schema::create('pqrsds', function (Blueprint $table) {
            $table->id();

            //Datos clientes
            $table->unsignedBigInteger('idCliente')->nullable();
            $table->string('correoElectronico')->nullable();

            //Datos pqrsds
            $table->enum('esAnonima', ['TRUE','FALSE'])->nullable();
            $table->enum('tipoPqrsd', ['peticion','queja','reclamo','solicitud','denuncia'])->nullable();
            $table->enum('tipoPersona', ['natural','juridica','apoderado','ninos_ninas_adolescentes'])->nullable();
            $table->text('descripcionSolicitud')->nullable();
            $table->string('urlPdf')->nullable();
            $table->enum('estado', ['enviado','enProceso','resuelto'])->nullable();
            
            $table->timestamps();

            //LLaves foraneas
            $table->foreign('idCliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrsds');
    }
};