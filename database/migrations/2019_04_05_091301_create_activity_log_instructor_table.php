<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogInstructorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log_instructor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('activity');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users_instructor')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_log_instructor');
    }
}
