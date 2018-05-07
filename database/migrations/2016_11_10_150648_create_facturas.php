<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concepto',100);
            $table->string('razonSocial',100);
            $table->string('nFactura',10) ->nullable();
            $table->integer('tipoGasto_id')->references('id')->on('tipoGastos');
            $table->date('fecha')->nullable();
            $table->double('monto',15,2)->default(0);
            $table->string('nroExp')->nullable();
//            $table->unsignedSmallInteger('estado_id')->references('id')->on('estados');
            $table->string('patente',11) ->nullable();;
            $table->integer('usuario_id')->nullable(false);
            $table->string('area_id')->nullable(false);
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
        Schema::drop('facturas');
    }
}
