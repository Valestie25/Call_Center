<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentCCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CALLS_DEPARTMENT_C', function (Blueprint $table) {
            $table->increments('ID_LLAMADAS');
            $table->string('FECHA_DE_LLAMADAS');
            $table->string('HORA_DE_LLAMADAS');
            $table->string('CANTIDAD_PROMEDIO_DE_LLAMADAS');
            $table->string('DURACION_PROMEDIO_DE_LLAMADAS');
            $table->string('TIEMPO_PROMEDIO_DE_ESPERA');
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
        Schema::drop('CALLS_DEPARTMENT_C');
    }
}
