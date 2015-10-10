<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKesalahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesalahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kategori_id', false, false);
            $table->string('kod', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kesalahan');
    }
}
