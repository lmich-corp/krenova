<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuesinventorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesinventors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');
            $table->string('temuan_asli');
            $table->string('waktu_produksi');
            $table->string('sudah_ada');
            $table->string('ide_orang');
            $table->string('asal_usul');
            $table->string('komersial');
            $table->string('komersial_pihak');
            $table->string('penarapan');
            $table->string('pelaku_penerapan');
            $table->string('cakupan_penerapan');
            $table->string('bahan_lokal');
            $table->string('kapasitas_produksi');
            $table->string('tenaga_kerja');
            $table->string('prospek_tempat');
            $table->string('prospek_cara');
            $table->string('biaya_produksi');
            $table->string('omset');
            $table->string('asal_bahan');
            $table->string('quantity_bahan');
            $table->string('orientasi');
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
        Schema::drop('kuesinventors');
    }
}
