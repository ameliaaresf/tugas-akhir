<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skt', function (Blueprint $table) {
            $table->id();
            $table->string('no_regis');
            $table->string('nama_lembaga');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('utara');
            $table->string('timur');
            $table->string('selatan');
            $table->string('barat');
            $table->date('tgl_buat');
            $table->string('ttd');
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
        Schema::dropIfExists('skt');
    }
}
