<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Crypt;

class CreateMnhOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mnh_owner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('notel');
            $table->string('email');
            $table->text('descwebsite');
            $table->string('position');
            $table->text('desc');
            $table->string('address');
            $table->integer('age');
            $table->string('password');
            $table->integer('visitor');
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
        Schema::dropIfExists('mnh_owner');
    }
}
