<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_wisata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_wisata')->nullable();
            $table->string('gambar')->nullable();
            $table->integer('min_harga')->nullable();
            $table->integer('max_harga')->nullable();
            $table->string('musim')->nullable();
            $table->integer('durasi_malam')->nullable();
            $table->boolean('penerbangan')->nullable();
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
        Schema::dropIfExists('daftar_wisata');
    }
}
