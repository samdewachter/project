<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vraag_id')->unsigned()->index();
            $table->string('antwoord')->nullable();
            $tabel->integer('aantal');
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
        //
    }
}
