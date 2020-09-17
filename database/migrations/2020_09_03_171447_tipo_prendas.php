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
            $table->timestamps();
        });

        DB::table('tipo_prendas')->insert([
            'nombre' => 'Blusas',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'jeans',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Camisas',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Vestidos',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Shorts',
        ]);
        DB::table('tipo_prendas')->insert([
            'nombre' => 'Capris',
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
