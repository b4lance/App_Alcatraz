<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('area_id');
           

            $table->string('nombre_personal');
            $table->string('apellido_personal');
            $table->string('cedula_personal');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->text('direccion');
            $table->text('municipio');
            $table->text('sector');
            $table->text('casa');
            $table->string('telefono_movil');
            $table->string('telefono_fijo');
            $table->enum('sexo',['Masculino','Femenino']);
            $table->date('fecha_inicio');
            $table->date('fecha_culminacion');
            $table->enum('status',['Activo','Inactivo'])->default('Activo');

            $table->timestamps();

            $table->foreign('usuario_id')->references('id_usuario')->on('usuarios')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('cargo_id')->references('id')->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('area_id')->references('id')->on('areas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
