<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrendaTallanumero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenda_tallanumero', function (Blueprint $table) {
            $table->bigInteger('id_prendas')->unsigned();
            $table->bigInteger('id_tallanumero')->unsigned();

            $table->foreign('id_prendas')->references('id')->on('tipo_prendas');
            $table->foreign('id_tallanumero')->references('id')->on('tallas_numeros');

            $table->primary(['id_prendas','id_tallanumero']);

            $table->timestamps();
        });

        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 1,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 2,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 3,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 4,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 5,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 2,
            'id_tallanumero' => 6,
        ]);

        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 1,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 2,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 3,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 4,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 5,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 5,
            'id_tallanumero' => 6,
        ]);

        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 1,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 2,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 3,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 4,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 5,
        ]);
        DB::table('prenda_tallanumero')->insert([
            'id_prendas' => 6,
            'id_tallanumero' => 6,
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prenda_tallanumero');
    }
}
