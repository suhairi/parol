<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluarmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarmasuk', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh');
            $table->integer('cawangan_id', false, false);
            $table->integer('kesalahan', false, false);
            $table->string('bangsa');
            $table->integer('jumlah', false, false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keluarmasuk');
    }
}
