<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('drivers', function(Blueprint $table){
          $table->increments('id');
          $table->string('name');
          $table->string('surname');
          $table->string('gender');
          $table->integer('age');
          $table->integer('cell');
          $table->string('email');
          $table->string('address');
          $table->string('car');
          $table->string('model');
          $table->string('color');
          $table->string('licence');
          $table->integer('alcohol_status');
          $table->integer('speed_status');
          $table->integer('speed');
          $table->timestamps('date_stamp');
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
        Schema::drop('drivers');
    }
}
