<?php

namespace App\Http\Controllers;
use App\Pesdik;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PesdikController extends Controller
{
    public function lihat_pendaftar()
    {
        $data_pesdik = \App\Pesdik::all();
        return view('pesdik.lihat_pendaftar', compact('data_pesdik'));
    }

    public function form_daftar()
    {
        return view('pesdik.form_daftar');
    }

    public function daftar (Request $request)
    {
        $request->validate([
            'nama_lengkap'          => 'min:5',
            'nama_panggilan'        => 'min:3',
            'tempat_lahir'          => 'min:5',
            'tinggi_badan'          => 'min:2|numeric',
            'berat_badan'           => 'min:2|numeric',
            'anak_ke'               => 'max:2|numeric',
            'asal_tkra'             => 'min:5',
            'alamat_tkra'           => 'min:5',

            'nama_ayah'             => 'min:5',
            'tempat_lahir_ayah'     => 'min:5',
            'alamat_ayah'           => 'min:6',

            'nama_ibu'             => 'min:5',
            'tempat_lahir_ibu'     => 'min:5',
            'alamat_ibu'           => 'min:6',


        ]);
        $pesdik = new Pesdik();
        $pesdik->nama_lengkap           = $request->input('nama_lengkap');
        $pesdik->nama_panggilan         = $request->input('nama_panggilan');
        $pesdik->tempat_lahir           = $request->input('tempat_lahir');
        $pesdik->tgl_lahir              = $request->input('tgl_lahir');
        $pesdik->jenis_kelamin          = $request->input('jenis_kelamin');
        $pesdik->tinggi_badan           = $request->input('tinggi_badan');
        $pesdik->berat_badan            = $request->input('berat_badan');
        $pesdik->golongan_darah         = $request->input('golongan_darah');
        $pesdik->penyakit_pernah_derita = $request->input('penyakit_pernah_derita');
        $pesdik->agama                  = $request->input('agama');
        $pesdik->kewarganegaraan        = $request->input('kewarganegaraan');
        $pesdik->tinggal_bersama        = $request->input('tinggal_bersama');
        $pesdik->anak_ke                = $request->input('anak_ke');
        $pesdik->saudara_kandung        = $request->input('saudara_kandung');
        $pesdik->saudara_tiri           = $request->input('saudara_tiri');
        $pesdik->saudara_angkat         = $request->input('saudara_angkat');
        $pesdik->bahasa_sehari          = $request->input('bahasa_sehari');
        $pesdik->jarak_rumah_kesekolah  = $request->input('jarak_rumah_kesekolah');
        $pesdik->asal_tkra              = $request->input('asal_tkra');
        $pesdik->alamat_tkra            = $request->input('alamat_tkra');
        $pesdik->tanggal_sttb           = $request->input('tanggal_sttb');
        $pesdik->nomor_sttb             = $request->input('nomor_sttb');
        $pesdik->kesulitan_di_tkra      = $request->input('kesulitan_di_tkra');
        $pesdik->bakat_minat_anak       = $request->input('bakat_minat_anak');
        $pesdik->prestasi_belajar       = $request->input('prestasi_belajar');

        $pesdik->nama_ayah              = $request->input('nama_ayah');
        $pesdik->tempat_lahir_ayah      = $request->input('tempat_lahir_ayah');
        $pesdik->tgl_lahir_ayah         = $request->input('tgl_lahir_ayah');
        $pesdik->agama_ayah             = $request->input('agama_ayah');
        $pesdik->kewarganegaraan_ayah   = $request->input('kewarganegaraan_ayah');
        $pesdik->pendidikan_ayah        = $request->input('pendidikan_ayah');
        $pesdik->pekerjaan_ayah         = $request->input('pekerjaan_ayah');
        $pesdik->instansi_kerja_ayah    = $request->input('instansi_kerja_ayah');
        $pesdik->jabatan_kerja_ayah     = $request->input('jabatan_kerja_ayah');
        $pesdik->alamat_kantor_ayah     = $request->input('alamat_kantor_ayah');
        $pesdik->lama_kerja_ayah_perhari= $request->input('lama_kerja_ayah_perhari');
        $pesdik->penghasilan_ayah       = $request->input('penghasilan_ayah');
        $pesdik->alamat_ayah            = $request->input('alamat_ayah');
        $pesdik->no_hp_ayah             = $request->input('no_hp_ayah');
        $pesdik->hubungan_ayah          = $request->input('hubungan_ayah');

        $pesdik->nama_ibu              = $request->input('nama_ibu');
        $pesdik->tempat_lahir_ibu      = $request->input('tempat_lahir_ibu');
        $pesdik->tgl_lahir_ibu         = $request->input('tgl_lahir_ibu');
        $pesdik->agama_ibu             = $request->input('agama_ibu');
        $pesdik->kewarganegaraan_ibu   = $request->input('kewarganegaraan_ibu');
        $pesdik->pendidikan_ibu        = $request->input('pendidikan_ibu');
        $pesdik->pekerjaan_ibu         = $request->input('pekerjaan_ibu');
        $pesdik->instansi_kerja_ibu    = $request->input('instansi_kerja_ibu');
        $pesdik->jabatan_kerja_ibu     = $request->input('jabatan_kerja_ibu');
        $pesdik->alamat_kantor_ibu     = $request->input('alamat_kantor_ibu');
        $pesdik->lama_kerja_ibu_perhari= $request->input('lama_kerja_ibu_perhari');
        $pesdik->penghasilan_ibu       = $request->input('penghasilan_ibu');
        $pesdik->alamat_ibu            = $request->input('alamat_ibu');
        $pesdik->no_hp_ibu             = $request->input('no_hp_ibu');
        $pesdik->hubungan_ibu          = $request->input('hubungan_ibu');
      
        $pesdik->save();

        return redirect('/pesdik/lihat_pendaftar')->with("sukses", "Data Anda Telah Didaftarkan");

    }

    public function detail($id_pesdik)
    {
        $pesdik = \App\Pesdik::find($id_pesdik);
        return view('/pesdik/detail', compact('pesdik'));
    }
}
