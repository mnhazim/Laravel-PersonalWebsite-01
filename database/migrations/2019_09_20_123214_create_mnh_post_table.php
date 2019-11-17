<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMnhPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mnh_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_var');
            $table->string('title');
            $table->mediumText('desc');
            $table->string('place');
            $table->integer('status');
            $table->integer('visitor');
            $table->longText('content');
            $table->string('image');
            $table->timestamps();

            $table->foreign('id_var')->references('id')->on('mnh_lookup_var');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mnh_post');
    }
}
