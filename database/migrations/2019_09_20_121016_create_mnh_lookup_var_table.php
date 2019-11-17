<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMnhLookupVarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mnh_lookup_var', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_mst');
            $table->string('title');
            $table->timestamps();

            $table->foreign('id_mst')->references('id')->on('mnh_lookup_mst');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
