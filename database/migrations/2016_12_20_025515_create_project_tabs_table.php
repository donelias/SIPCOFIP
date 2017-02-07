<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tabs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('no_tab');
            $table->text('name');
            $table->string('system_id');
            $table->integer('runner_id');
            $table->integer('community_council_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('status', [ 'sent', 'approved', 'rejected', 'in action', 'executed' ]);
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
        Schema::drop('project_tabs');
    }
}
