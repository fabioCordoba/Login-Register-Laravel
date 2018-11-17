<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('rol_menus');
    }
}
