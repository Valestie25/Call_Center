<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->string('nombre_empleado');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->unsignedBigInteger('id_departamento');
            $table->timestamps();

            $table->foreign('id_departamento')->references('id_departamento')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
