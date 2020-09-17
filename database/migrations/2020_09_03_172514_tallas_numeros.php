<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TallasNumeros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas_numeros', function (Blueprint $table) {
            $table->id();
            $table->string('numeros');
            $table->timestamps();
        });

        DB::table('tallas_numeros')->insert([
            'numeros' => '4',
        ]);
        DB::table('tallas_numeros')->insert([
            'numeros' => '6',
        ]);
        DB::table('tallas_numeros')->insert([
            'numeros' => '8',
        ]);
        DB::table('tallas_numeros')->insert([
            'numeros' => '10',
        ]);
        DB::table('tallas_numeros')->insert([
            'numeros' => '12',
        ]);
        DB::table('tallas_numeros')->insert([
            'numeros' => '14',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tallas_numeros');
    }
}
