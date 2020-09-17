<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendidos', function (Blueprint $table) {
            $table->bigInteger('id_factura')->unsigned();
            $table->bigInteger('id_producto')->unsigned();

            $table->foreign('id_factura')->references('id')->on('facturacion');
            $table->foreign('id_producto')->references('id')->on('productos');

            $table->primary(['id_factura','id_producto']);

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
        Schema::drop('vendidos');
    }
}
