<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colores', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->timestamps();
        });

        DB::table('colores')->insert([
            'color' => 'blanco',
        ]);
        DB::table('colores')->insert([
            'color' => 'negro',
        ]);
        DB::table('colores')->insert([
            'color' => 'amarillo',
        ]);
        DB::table('colores')->insert([
            'color' => 'azul',
        ]);
        DB::table('colores')->insert([
            'color' => 'rojo',
        ]);
        DB::table('colores')->insert([
            'color' => 'verde',
        ]);
        DB::table('colores')->insert([
            'color' => 'morado',
        ]);
        DB::table('colores')->insert([
            'color' => 'naranja',
        ]);
        DB::table('colores')->insert([
            'color' => 'marron',
        ]);
        DB::table('colores')->insert([
            'color' => 'gris',
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
