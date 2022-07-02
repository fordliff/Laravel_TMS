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
        Schema::create('usertasks', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('userIDNo');
            $table->foreign('userIDNo')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('taskmgtID')->unsigned();
            $table->foreign('taskmgtID')->references('taskID')->on('taskmgts')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('priority');
            $table->integer('statusIDNo')->unsigned();
            $table->foreign('statusIDNo')->references('statusID')->on('statusmgts')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('usertasks');
    }
};
