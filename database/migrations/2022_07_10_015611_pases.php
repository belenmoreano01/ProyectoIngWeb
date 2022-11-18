<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('persona_id')->constrained('personas');
            $table->dateTime('creado');
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
    }
}
