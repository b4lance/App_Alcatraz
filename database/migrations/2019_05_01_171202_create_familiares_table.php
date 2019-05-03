<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->bigIncrements('id_familiar');
            $table->unsignedBigInteger('participante_id');
            $table->string('nombre_familiar');
            $table->string('apellido_familiar');
            $table->string('cedula_familiar');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->enum('sexo',['Masculino','Femenino']);
            $table->text('direccion');
            $table->string('telefono');
            $table->enum('parentezco',['Padre','Madre','Pareja','Hijo']);
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
        Schema::dropIfExists('familiares');
    }
}
