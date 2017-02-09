<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_obat_merk')->nullable();
            $table->string('nama_obat_generik')->nullable();
            $table->string('kandungan_obat')->nullable();
            $table->string('golongan_obat')->nullable();
            $table->string('tanggal_beli')->nullable();
            $table->string('tanggal_kadaluarsa')->nullable();
            $table->string('harga_beli')->nullable();
            $table->string('harga_jual')->nullable();
            $table->string('jumlah')->nullable();
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
        Schema::dropIfExists('obat');
    }
}
