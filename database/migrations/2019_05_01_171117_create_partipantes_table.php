<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partipantes', function (Blueprint $table) {
            $table->bigIncrements('id_participante');
            $table->string('nombre_participante');
            $table->string('apellido_participante');
            $table->string('cedula_participante');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('estado_civil');
            $table->text('direccion');
            $table->text('municipio');
            $table->text('sector');
            $table->text('casa');
            $table->string('telefono_movil');
            $table->string('telefono_fijo');
            $table->enum('sexo',['Masculino','Femenino']);
            $table->string('nivel_educativo');
            $table->string('instituto');
            $table->integer('fecha_cursada');
            $table->string('banda_pertenece')->nullable();
            $table->text('delitos_cometidos')->nullable();
            $table->integer('fase_actual')->nullable();
            $table->text('rendimiento_academico')->nullable();
            $table->date('fecha_inicia')->nullable();
            $table->date('fecha_culmina')->nullable();
            $table->integer('cita_id')->nullable();
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
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
        Schema::dropIfExists('partipantes');
    }
}
