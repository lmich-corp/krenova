<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draftadmins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('nama_kabupaten');
            $table->text('alokasi_anggaran');
            $table->text('perda');
            $table->string('lampiranperda1_name');
            $table->string('lampiranperda2_name');
            $table->string('lampiranperda3_name');
            $table->text('mou');
            $table->string('lampiranmou1_name');
            $table->string('lampiranmou2_name');
            $table->string('lampiranmou3_name');
            $table->text('lombakab');
            $table->text('pamerankab');
            $table->text('jumlah_lombakab');
            $table->string('lampiranlomba_name');
            $table->text('jumlah_pamerankab');
            $table->string('lampiranpameran_name');
            $table->text('pemenang_provinsi');
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
        Schema::drop('draftadmins');
    }
}
