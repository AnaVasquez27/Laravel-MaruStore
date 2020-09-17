<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoPrendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_prendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('precio');
            $table->integer('existencias');
            $table->timestamps();
        });

        DB::table('tipo_prendas')->insert([
            'nombre' => 'Blusas',
            'precio' => '25000',
            'existencias' => '15',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'jeans',
            'precio' => '65000',
            'existencias' => '10',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Camisas',
            'precio' => '30000',
            'existencias' => '8',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Vestidos',
            'precio' => '45000',
            'existencias' => '15',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Shorts',
            'precio' => '10000',
            'existencias' => '18',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Capris',
            'precio' => '50000',
            'existencias' => '10',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_prendas');
    }
}
