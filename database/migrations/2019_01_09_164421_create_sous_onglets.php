<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousOnglets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sous_onglet',function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('description');
            $table->unsignedInteger('onglet');
            $table->foreign('onglet')->references('id')->on('about')->onDelete('cascade');
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
        //
        Schema::dropIfExists('sous_onglet');
    }
}
