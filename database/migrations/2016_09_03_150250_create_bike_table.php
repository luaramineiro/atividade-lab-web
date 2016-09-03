<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicicleta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fabricante', 250);
            $table->string('modelo', 250);
            $table->string('cor', 250);
            $table->string('marcha', 1)->nullable();
            $table->string('marca', 250)->nullable();
            $table->string('proprietario', 250);
            $table->string('celular', 250);
            $table->string('email', 250)->nullable();
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
        Schema::drop('bicicleta');
    }
}
