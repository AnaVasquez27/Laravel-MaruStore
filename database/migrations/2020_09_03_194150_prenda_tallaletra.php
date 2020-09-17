<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrendaTallaletra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenda_tallaletra', function (Blueprint $table) {
            $table->bigInteger('id_prendas')->unsigned();
            $table->bigInteger('id_tallaletra')->unsigned();

            $table->foreign('id_prendas')->references('id')->on('tipo_prendas');
            $table->foreign('id_tallaletra')->references('id')->on('tallas_letras');

            $table->primary(['id_prendas','id_tallaletra']);

            $table->timestamps();
        });

        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 1,
            'id_tallaletra' => 1,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 1,
            'id_tallaletra' => 2,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 1,
            'id_tallaletra' => 3,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 1,
            'id_tallaletra' => 4,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 3,
            'id_tallaletra' => 1,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 3,
            'id_tallaletra' => 2,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 3,
            'id_tallaletra' => 3,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 3,
            'id_tallaletra' => 4,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 4,
            'id_tallaletra' => 1,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 4,
            'id_tallaletra' => 2,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 4,
            'id_tallaletra' => 3,
        ]);
        DB::table('prenda_tallaletra')->insert([
            'id_prendas' => 4,
            'id_tallaletra' => 4,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prenda_tallaletra');
    }
}
