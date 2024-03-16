<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigInteger('test_done_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('test_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            $table->string('answer');
            $table->boolean('isRight');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('test_done_id')->references('id')->on('tests_done');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
