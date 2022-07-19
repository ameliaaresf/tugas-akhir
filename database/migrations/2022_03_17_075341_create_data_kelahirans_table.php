<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kelahirans', function (Blueprint $table) {
            $table->id();
            // $table->string('nik');
            $table->string('nama_bayi');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->time('jam_lahir');
            $table->string('jk');
            $table->text('alamat');
            $table->string('agama');
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
        Schema::dropIfExists('data_kelahirans');
    }
}
