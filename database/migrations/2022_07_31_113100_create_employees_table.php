<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EMPLOYEES', function(Blueprint $table){
            $table -> increments('ID_EMPLEADO');
            $table -> string('NOMBRE');
            $table -> string('APELLIDOS');
            $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('EMPLOYEES');
    }
}
