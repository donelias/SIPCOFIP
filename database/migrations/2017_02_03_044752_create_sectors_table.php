<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('sector');
            $table->integer('parish_id')->unsigned();
            $table->foreign('parish_id')->references('id')->on('parishes');
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
        Schema::drop('sectors');
    }
}
