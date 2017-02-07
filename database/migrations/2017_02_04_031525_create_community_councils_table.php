<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommunityCouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_councils', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('rif');
            $table->string('name');
            $table->integer('people_id')->unsigned();
            $table->foreign('people_id')->references('id')->on('people');
            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('sectors');
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
        Schema::drop('community_councils');
    }
}
