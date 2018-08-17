<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table){
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 100)->nullable()->unique();
            $table->date('dob');
            $table->string('mobile', 50);
            $table->string('aadhar_number', 100);
            $table->tinyInteger('eligibility_status')->default(1)->comment('1: Eligible, 2: Not Eligible');
            $table->tinyInteger('gender')->comment('1: male, 2: female');
            $table->timestamps();
            $table->softDeletes();
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
