<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftinventorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draftinventors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');

            $table->string('kategori');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('pekerjaan');
            $table->string('jk');
            $table->string('no_telp');
            $table->string('email');
            $table->string('kategori_kelompok');
            $table->string('nama_kelompok');
            $table->string('nama_ketua');
            $table->string('alamat_kelompok');
            $table->string('no_telp_kelompok');
            $table->string('email_kelompok');
            $table->string('anggota_1');
            $table->string('anggota_2');
            $table->string('anggota_3');
            $table->string('anggota_4');
            $table->string('anggota_5');
            $table->string('judul');
            $table->string('temuan');
            $table->string('pengembangan');

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

            $table->string('abstrak');
            $table->string('latar_belakang');
            $table->string('maksud');
            $table->string('manfaat');
            $table->string('spek_teknik');
            $table->string('keunggulan');
            $table->string('penerapan');
            $table->string('biaya_produksi_proposals');
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
        Schema::drop('draftinventors');
    }
}
