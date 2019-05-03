<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_citas', function (Blueprint $table) {
            $table->bigIncrements('id_cita');
            $table->string('nombre_solicitante');
            $table->string('apellido_solicitante');
            $table->string('cedula_solicitante');
            $table->enum('sexo_solicitante',['Masculino','Femenino']);
            $table->text('direccion');
            $table->text('municipio');
            $table->text('sector');
            $table->text('casa');
            $table->string('telefono_movil');
            $table->string('telefono_fijo');
            $table->string('nombre_aspirante');
            $table->string('apellido_aspirante');
            $table->string('cedula_aspirante');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->enum('sexo_aspirante',['Masculino','Femenino']);
            $table->date('fecha_cita');
            $table->text('motivo');
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
        Schema::dropIfExists('solicitud_citas');
    }
}
