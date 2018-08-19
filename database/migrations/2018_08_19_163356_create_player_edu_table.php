<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerEduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_edu', function (Blueprint $table){
            $table->increments('id');
            $table->integer('ref_player_id')->unsigned();
            $table->integer('hsc_pass_year')->unsigned();
            $table->integer('college_started_year')->unsigned();
            $table->tinyInteger('current_college_year');
            $table->tinyInteger('total_college_year');
            $table->string('current_roll_no');
            $table->string('college_stream');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ref_player_id')->references('id')->on('players');
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
