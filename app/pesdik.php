<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesdik extends Model
{
    protected $table = 'pesdik';
    protected $fillable = ['nama_lengkap','nama_panggilan','tempat_lahir','tgl_lahir','jenis_kelamin','tinggi_badan','berat_badan','golongan_darah','penyakit_pernah_derita','agama','kewarganegaraan','tinggal_bersama','anak_ke','saudara_kandung','saudara_tiri','saudara_angkat','bahasa_sehari','jarak_rumah_kesekolah','asal_tkra','alamat_tkra','tanggal_sttb','nomor_sttb','kesulitan_di_tkra','bakat_minat_anak','prestasi_belajar',
                            'nama_ayah','tempat_lahir_ayah','tgl_lahir_ayah','agama_ayah','kewarganegaraan_ayah','pendidikan_ayah','pekerjaan_ayah','instansi_kerja_ayah','jabatan_kerja_ayah','alamat_kantor_ayah','lama_kerja_ayah_perhari','penghasilan_ayah','alamat_ayah','no_hp_ayah','hubungan_ayah',
                            'nama_ibu','tempat_lahir_ibu','tgl_lahir_ibu','agama_ibu','kewarganegaraan_ibu','pendidikan_ibu','pekerjaan_ibu','instansi_kerja_ibu','jabatan_kerja_ibu','alamat_kantor_ibu','lama_kerja_ibu_perhari','penghasilan_ibu','alamat_ibu','no_hp_ibu','hubungan_ibu',];
}
