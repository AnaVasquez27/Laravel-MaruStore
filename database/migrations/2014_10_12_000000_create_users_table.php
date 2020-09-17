<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Ana Vasquez',
            'email' => 'root@gmail.com',
            'password' => '$2y$10$HK3S28dd9RGiuzNgtXeIzO5sKQzE9EcMygK0/MzqhFCRD6TprgpcK',
            'created_at' => '2020-08-30 18:19:58.000000'
        ]);

        DB::table('users')->insert([
            'name' => 'Cesar Mora',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$HK3S28dd9RGiuzNgtXeIzO5sKQzE9EcMygK0/MzqhFCRD6TprgpcK',
            'created_at' => '2020-08-30 22:19:58.000000'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
