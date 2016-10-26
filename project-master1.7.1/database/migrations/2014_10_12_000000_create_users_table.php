<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('achternaam');
            $table->string('geslacht');
            $table->string('provincie');
            $table->string('gemeente');
            $table->string('postcode');
            $table->string('straat');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('role');
            $table->integer('coin');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
