<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('areas', function(Blueprint $table) {
            $table->engine = 'InnoDB';
         
            $table->increments('id');
            $table->unsignedInteger('sso_id_area');
            $table->string('nombre');
            $table->boolean('active')->default(1);

            $table->timestamp('created_at')->default('1970-01-01 00:00:01');
            $table->timestamp('updated_at')->default('1970-01-01 00:00:01');

            $table->index('id');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('areas');
    }
        //

}
