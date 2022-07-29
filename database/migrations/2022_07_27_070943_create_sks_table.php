<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sks', function (Blueprint $table) {
            $table->id();
            $table->string('no_regis');
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('sks');
    }
}
