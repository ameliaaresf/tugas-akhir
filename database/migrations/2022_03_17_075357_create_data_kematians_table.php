<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kematians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penduduk')->unsigned();
            $table->foreign('id_penduduk')->references('id')->on('data_penduduks');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('tempat_wafat');
            $table->date('tgl_wafat');
            $table->string('sebab_wafat');
            $table->string('jk');
            $table->text('alamat');
            $table->string('agama');
            $table->string('pekerjaan');
            // $table->string('usia');
            $table->string('kw');
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
        Schema::dropIfExists('data_kematians');
    }
}
