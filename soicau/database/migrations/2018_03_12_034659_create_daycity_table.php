<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaycityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daycity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcity')->unsigned();
            $table->integer('idday')->unsigned();
            $table->timestamps();

            $table->foreign('idcity')->references('id')->on('city');
            $table->foreign('idday')->references('id')->on('day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daycity');
    }
}
