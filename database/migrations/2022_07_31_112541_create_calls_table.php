<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('CALLS', function(Blueprint $table){
            $table -> increments('ID_LLAMADAS');
            $table -> date('FECHA_DE_LLAMADAS');
            $table -> float('DURACION_DE_LLAMADAS');
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
        Schema::drop('calls');
    }
}
