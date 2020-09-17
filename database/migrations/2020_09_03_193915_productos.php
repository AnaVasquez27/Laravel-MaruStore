<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_prendas')->unsigned();
            $table->bigInteger('id_color')->unsigned();
            $table->bigInteger('precio');
            $table->integer('existencias');

            $table->foreign('id_prendas')->references('id')->on('tipo_prendas');
            $table->foreign('id_color')->references('id')->on('colores');

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
        Schema::drop('colores');
    }
}
