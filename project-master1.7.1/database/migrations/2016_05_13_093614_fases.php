<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('beschrijving');
            $table->date('datum');
            $table->timestamps();
        });

        Schema::create('fases_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('fases_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('fases_id')->references('id')->on('fases');
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
        Schema::drop('fases_product');
        Schema::drop('fases');
    }
}
