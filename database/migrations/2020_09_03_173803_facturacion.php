<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Facturacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned();
            $table->dateTime('fecha');
            $table->bigInteger('total_pagar');

            $table->foreign('id_cliente')->references('id')->on('clientes');

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
        Schema::drop('facturacion');
    }
}
