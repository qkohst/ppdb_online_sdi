<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesdikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesdik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('golongan_darah')->nullable();
            $table->string('penyakit_pernah_derita')->nullable();
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('tinggal_bersama');
            $table->string('anak_ke');
            $table->string('saudara_kandung')->nullable();
            $table->string('saudara_tiri')->nullable();
            $table->string('saudara_angkat')->nullable();
            $table->string('bahasa_sehari');
            $table->string('jarak_rumah_kesekolah');
            $table->string('asal_tkra');
            $table->string('alamat_tkra');
            $table->date('tanggal_sttb')->nullable();
            $table->string('nomor_sttb')->nullable();
            $table->string('kesulitan_di_tkra')->nullable();
            $table->string('bakat_minat_anak');
            $table->string('prestasi_belajar')->nullable();

            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tgl_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('instansi_kerja_ayah')->nullable();
            $table->string('jabatan_kerja_ayah')->nullable();
            $table->string('alamat_kantor_ayah')->nullable();
            $table->string('lama_kerja_ayah_perhari');
            $table->string('penghasilan_ayah');
            $table->string('alamat_ayah');
            $table->string('no_hp_ayah')->nullable();
            $table->string('hubungan_ayah');

            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tgl_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('instansi_kerja_ibu')->nullable();
            $table->string('jabatan_kerja_ibu')->nullable();
            $table->string('alamat_kantor_ibu')->nullable();
            $table->string('lama_kerja_ibu_perhari');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ibu');
            $table->string('no_hp_ibu')->nullable();
            $table->string('hubungan_ibu');

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
        Schema::dropIfExists('pesdik');
    }
}
