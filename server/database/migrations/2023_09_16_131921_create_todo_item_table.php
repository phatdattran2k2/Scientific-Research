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
        Schema::create('todo_item', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('todo_list_id')->unsigned();
            $table->string('task');
            $table->string('status');
            $table->timestamps();

            $table->foreign('todo_list_id')->references('id')->on('todo_list')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_item');
    }
};
