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

            $table->foreign('id_prendas')->references('id')->on('tipo_prendas');
            $table->foreign('id_color')->references('id')->on('colores');

            $table->timestamps();
        });

        /**Colores para las blusas existentes */
        DB::table('productos')->insert([
            'id_prendas' => 1,
            'id_color' => 1,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 1,
            'id_color' => 2,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 1,
            'id_color' =>3,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 1,
            'id_color' => 4,
        ]);

        /**Colores para los jeans existentes */
        DB::table('productos')->insert([
            'id_prendas' => 2,
            'id_color' => 1,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 2,
            'id_color' => 2,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 2,
            'id_color' =>3,
        ]);
        DB::table('productos')->insert([
            'id_prendas' => 2,
            'id_color' => 4,
        ]);
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
