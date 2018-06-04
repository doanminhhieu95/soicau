<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaikqxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaikqxs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idkqxs')->unsigned();
            $table->integer('idgiai')->unsigned();

            $table->foreign('idkqxs')->references('id')->on('kqxs');
            $table->foreign('idgiai')->references('id')->on('giai');
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
        Schema::dropIfExists('giaikqxs');
    }
}
