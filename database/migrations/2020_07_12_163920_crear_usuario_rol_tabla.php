<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarioRolTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('usu_rol_id');
            $table->string('usu_rol_estado');
            $table->integer('usu_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('usu_id')->references('usu_id')->on('usuario')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('rol_id')->references('rol_id')->on('rol')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
