<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha')->nullable(false);
            $table->integer('tipoGasto_id')->references('id')->on('tipoGastos');
            $table->unsignedSmallInteger('estado_id')->references('id')->on('estados');
            $table->boolean('finalizado')->nulleable(false)->default(false);
            $table->date('fechaEstado')->nulleable(true);
            $table->string('ifgra',100)->nullable(false);
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
        Schema::drop('certificados');
    }
}
