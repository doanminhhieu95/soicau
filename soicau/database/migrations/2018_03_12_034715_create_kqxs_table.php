<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKqxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kqxs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngayxoso');
            $table->integer('iddaycity')->unsigned();

            $table->foreign('iddaycity')->references('id')->on('daycity');
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
        Schema::dropIfExists('kqxs');
    }
}
