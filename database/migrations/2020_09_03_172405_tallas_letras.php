<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TallasLetras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas_letras', function (Blueprint $table) {
            $table->id();
            $table->string('letras');
            $table->timestamps();
        });

        DB::table('tallas_letras')->insert([
            'letras' => 'S',
        ]);
        DB::table('tallas_letras')->insert([
            'letras' => 'M',
        ]);
        DB::table('tallas_letras')->insert([
            'letras' => 'L',
        ]);
        DB::table('tallas_letras')->insert([
            'letras' => 'XL',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tallas_letras');
    }
}
