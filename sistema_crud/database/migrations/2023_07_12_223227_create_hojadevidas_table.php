<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojadevidas', function (Blueprint $table) {
            $table->id();
            $table->string('Tipodoc');
            $table->string('documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('Estado_civil');
            $table->string('Sexo');
            $table->string('direccion');
            $table->string('mail');            
            $table->string('Perfil_Profesional');
            $table->string('colegio');
            $table->string('año');
            $table->string('institucion');
            $table->string('años');
            $table->string('habilidades');
            $table->string('Nombre_empresa');
            $table->string('descrip');
            $table->string('fecha_inicio');
            $table->string('fecha_Final');
            $table->string('Nombre_empresa1');
            $table->string('descrip1');
            $table->string('fecha_inicio1');
            $table->string('fecha_Final1');
            $table->string('Nombre_empresa2');
            $table->string('descrip2');
            $table->string('fecha_inicio2');
            $table->string('fecha_Final2');
            $table->string('Idioma');
            $table->string('nivel');
            $table->string('refe_perso_nom');
            $table->string('refe_apellido');
            $table->string('refe_tel');
            $table->string('refe_fami');
            $table->string('refe_faapell');
            $table->string('refe_tel_fa');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hojadevidas');
    }
};
