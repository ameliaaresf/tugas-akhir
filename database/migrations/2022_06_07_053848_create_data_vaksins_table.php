<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_vaksins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penduduk')->unsigned();
            $table->foreign('id_penduduk')->references('id')->on('data_penduduks');
            $table->string('nik');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('keterangan');
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
        Schema::dropIfExists('data_vaksins');
    }
}
