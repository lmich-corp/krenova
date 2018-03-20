<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');
            $table->string('abstrak');
            $table->string('latar_belakang');
            $table->string('maksud');
            $table->string('manfaat');
            $table->string('spek_teknik');
            $table->string('keunggulan');
            $table->string('penerapan');
            $table->string('biaya_produksi');
            $table->string('prospek_bisnis');
            $table->string('foto1_name');
            $table->string('foto2_name');
            $table->string('foto3_name');
            $table->string('foto4_name');
            $table->string('suratpengantar_name');
            $table->string('spk_name');
            $table->string('lampiran1_name');
            $table->string('lampiran2_name');
            $table->string('lampiran3_name');
            $table->string('lampiran4_name');
            $table->string('lampiran5_name');
            $table->string('riwayathidup_name');
            $table->string('ktp_name');
            $table->string('status');
            $table->boolean('vote');
            $table->string('longitude');
            $table->string('latitude');
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
        Schema::drop('proposals');
    }
}
