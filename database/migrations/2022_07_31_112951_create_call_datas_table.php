<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('CALL_DATAS', function(Blueprint $table){
            $table -> increments('ID_CALLS_INFORMATION');
            //$table -> foreign('calls_information_id') ->references('id') -> on('calls') ;
            $table -> integer('NUMERO_DE_LLAMADAS');
            $table -> integer('NUMERO_DE_LLAMADAS_EN_ESPERA');
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
        Schema::drop('CALL_DATAS');
    }
}
