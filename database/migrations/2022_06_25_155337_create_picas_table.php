<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
           
            $table->unsignedInteger('ocena');
            $table->unsignedInteger('Cena');
            $table->timestamps();
         

      

            $table->unsignedBigInteger('poreklo_id');

            $table->foreign('poreklo_id')->references('id')->on('drzavas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picas');
    }
}
