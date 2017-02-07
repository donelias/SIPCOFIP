<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('identity');
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->text('address');
            $table->string('telephone');
            $table->integer('project_tab_id')->unsigned();
            $table->foreign('project_tab_id')->references('id')->on('project_tabs');
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
        Schema::drop('people');
    }
}
