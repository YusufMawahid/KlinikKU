<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputkeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputkeluhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TD')->nullable();
            $table->string('N')->nullable();
            $table->string('R')->nullable();
            $table->string('S')->nullable();
            $table->string('BB')->nullable();
            $table->string('TB')->nullable();
            $table->string('keluhan_utama')->nullable();
            $table->string('anamnesis')->nullable();
            $table->string('pemeriksaan_fisik')->nullable();
            $table->string('hasil_penunjang')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('saran')->nullable();
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
        Schema::dropIfExists('inputkeluhan');
    }
}
