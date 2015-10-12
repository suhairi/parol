<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->date('tarikh');
            $table->integer('cawangan_id', false, false);
            $table->primary(['tarikh', 'cawangan_id']);
            $table->integer('kesalahan_id', false, false);
            $table->integer('jantina_id', false, false);
            $table->integer('bangsa_id', false, false);
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
        Schema::drop('details');
    }
}