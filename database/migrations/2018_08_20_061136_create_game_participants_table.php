<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_player_id')->unsigned();
            $table->integer('ref_game_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ref_player_id')->references('id')->on('players');
            $table->foreign('ref_game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_participants');
    }
}
