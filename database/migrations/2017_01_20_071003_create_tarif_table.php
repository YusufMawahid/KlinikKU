<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tarif')->nullable();
            $table->string('klinik')->nullable();
            $table->string('dokter')->nullable();
            $table->string('asisten')->nullable();
            $table->string('bhp')->nullable();
            $table->string('jumlah_total')->nullable();
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
        Schema::dropIfExists('tarif');
    }
}
