<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
                $table->increments('id');
                $table->string('dni')->unique();
                $table->string('name');
                $table->string('apellidos');
                $table->date('fechaNacimiento')->nullable();
                $table->string('usuario');
                $table->string('password');
                $table->integer('perfil');
                $table->string('email')->unique();
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
