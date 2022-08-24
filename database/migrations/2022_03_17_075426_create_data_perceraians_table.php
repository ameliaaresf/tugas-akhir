<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPerceraiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perceraians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penduduk')->unsigned();
            $table->foreign('id_penduduk')->references('id')->on('data_penduduks');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->text('alamat');
            $table->string('agama');
            // $table->string('status');
            $table->string('pekerjaan');
            $table->string('kw');
            $table->string('nama_wali');
            $table->string('nama_pasangan');
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
        Schema::dropIfExists('data_perceraians');
    }
}
