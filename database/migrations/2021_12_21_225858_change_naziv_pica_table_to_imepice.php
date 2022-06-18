<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNazivPicaTableToImepice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('picas', function (Blueprint $table) {
            $table->renameColumn('naziv','imepice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('picas', function (Blueprint $table) {
            $table->renameColumn('imepice','naziv');
        });
    }
}
