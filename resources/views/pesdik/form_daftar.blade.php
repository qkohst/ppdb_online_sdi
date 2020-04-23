@extends('layouts.master')
@section('content')
    <!-- bradcam_area_start -->
            <div class="bradcam_area breadcam_bg overlay2">
                <h3>Formulir Pendaftaran</h3>
            </div>
	<!-- bradcam_area_end -->

    <!-- our_latest_blog_start -->
    <section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/pesdik/daftar" method="POST" enctype="multipart/form-data">
            <h3><i class="nav-icon fas fa-user-graduate my-1 btn-sm-1"></i> Data Peserta Didik</h3>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <label for="nama_lengkap">Nama Lengkap <i><b>(sesuai Akta Kelahiran)</b></i> <b>*</b></label>
                    <input value="{{old('nama_lengkap')}}" name="nama_lengkap" type="text" class="form-control bg-light" id="nama_lengkap"
                        placeholder="Nama Lengkap" required>
                    <label for="nama_panggilan">Nama Panggilan <b>*</b></label>
                    <input value="{{old('nama_panggilan')}}" name="nama_panggilan" type="text" class="form-control bg-light" id="nama_panggilan"
                        placeholder="Nama Panggilan" required>
                    <label for="tempat_lahir">Tempat Lahir <b>*</b></label>
                    <input value="{{old('tempat_lahir')}}" name="tempat_lahir" type="text" class="form-control bg-light" id="tempat_lahir"
                        placeholder="Tempat Lahir" required>
                    <label for="tgl_lahir">Tanggal Lahir <b>*</b></label>
                    <input value="{{old('tgl_lahir')}}" name="tgl_lahir" type="date" class="form-control bg-light"
                        id="tgl_lahir" required>   
                    <label for="jenis_kelamin">Jenis Kelamin <b>*</b></label>
                        <select name="jenis_kelamin" class="custom-select my-1 mr-sm-1 bg-light" id="jenis_kelamin"required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    <label for="tinggi_badan">Tinggi Badan <b>*</b></label>
                        <div class="input-group">
                            <input value="{{old('tinggi_badan')}}" name="tinggi_badan" type="text" class="form-control" id="tinggi_badan" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.cm</span>
                                </div>
                        </div>
                    <label for="berat_badan">Berat Badan <b>*</b></label>
                    <div class="input-group">
                            <input value="{{old('berat_badan')}}" name="berat_badan" type="text" class="form-control" id="berat_badan" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">.kg</span>
                                </div>
                        </div>
                    <label for="golongan_darah">Golongan Darah <i><b>(biarkan kosong jika tidak tahu)</b></i></label>
                        <select name="golongan_darah" class="custom-select my-1 mr-sm-1 bg-light" id="golongan_darah">
                            <option value="">-- Pilih Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    <label for="penyakit_pernah_derita">Penyakit Yang Pernah Diderita <i><b>(biarkan kosong jika tidak pernah menderita penyakit apapun)</b></i></label>
                    <input value="{{old('penyakit_pernah_derita')}}" name="penyakit_pernah_derita" type="text" class="form-control bg-light" id="penyakit_pernah_derita"
                        placeholder="Penyakit Yang Pernah Diderita">
                    <label for="agama">Agama <b>*</b></label>
                        <select name="agama" class="custom-select my-1 mr-sm-1 bg-light" id="agama" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen ">Kristen </option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    <label for="kewarganegaraan">Kewarganegaraan <b>*</b></label>
                        <select name="kewarganegaraan" class="custom-select my-1 mr-sm-1 bg-light" id="kewarganegaraan" required>
                            <option value="">-- Pilih Kewarganegaraan --</option>
                            <option value="WNI">WNI</option>
                            <option value="WNI Keturunan">WNI Keturunan</option>
                        </select>
                    <label for="tinggal_bersama">Tinggal Bersama <b>*</b></label>
                        <select name="tinggal_bersama" class="custom-select my-1 mr-sm-1 bg-light" id="tinggal_bersama" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Wali">Wali</option>
                        </select>
                    <label for="anak_ke">Anak Ke <i><b>(sesuai Akta Kelahiran)</b></i> <b>*</b></label>
                    <input value="{{old('anak_ke')}}" name="anak_ke" type="text" class="form-control bg-light" id="anak_ke"
                        placeholder="Anak Ke" required>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label for="saudara_kandung">Jumlah Saudara Kandung<i><b> (biarkan kosong jika tidak punya)</b></i></label>
                    <input value="{{old('saudara_kandung')}}" name="saudara_kandung" type="text" class="form-control bg-light" id="saudara_kandung"
                        placeholder="Jumlah Saudara Kandung">
                    <label for="saudara_tiri">Jumlah Saudara Tiri<i><b> (biarkan kosong jika tidak punya)</b></i></label>
                    <input value="{{old('saudara_tiri')}}" name="saudara_tiri" type="text" class="form-control bg-light" id="saudara_tiri"
                        placeholder="Jumlah Saudara Tiri">
                    <label for="saudara_angkat">Jumlah Saudara Angkat<i><b> (biarkan kosong jika tidak punya)</b></i></label>
                    <input value="{{old('saudara_angkat')}}" name="saudara_angkat" type="text" class="form-control bg-light" id="saudara_angkat"
                        placeholder="Jumlah Saudara Angkat">
                    <label for="bahasa_sehari">Bahasa Sehari-Hari Dirumah <b>*</b></label>
                        <select name="bahasa_sehari" class="custom-select my-1 mr-sm-1 bg-light" id="bahasa_sehari" required>
                            <option value="">-- Pilih Bahasa --</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jawa Krama">Jawa Krama</option>
                            <option value="Jawa Ngoko">Jawa Ngoko</option>
                            <option value="Lainnya...">Lainnya...</option>
                        </select>
                    <label for="jarak_rumah_kesekolah">Jarak Rumah Ke Sekolah <b>*</b></label>
                        <select name="jarak_rumah_kesekolah" class="custom-select my-1 mr-sm-1 bg-light" id="jarak_rumah_kesekolah" required>
                            <option value="">-- Pilih Jarak --</option>
                            <option value="Kurang Dari 1 km">Kurang Dari 1 km</option>
                            <option value="2 km">2 km</option>
                            <option value="3 km">3 km</option>
                            <option value="4 km">4 km</option>
                            <option value="5 km">5 km</option>
                            <option value="Lebih Dari 5 km">Lebih Dari 5 km</option>
                        </select>
                    <label for="asal_tkra">Asal TK / RA <i><b>(isikan nama TK/RA asal)</b></i> <b>*</b></label>
                        <input value="{{old('asal_tkra')}}" name="asal_tkra" type="text" class="form-control bg-light" id="asal_tkra"
                        placeholder="Asal TK / RA" required>
                    <label for="alamat_tkra">Alamat TK / RA <i><b>(isikan alamat lengkap TK/RA asal)</b></i> <b>*</b></label>
                        <input value="{{old('alamat_tkra')}}" name="alamat_tkra" type="text" class="form-control bg-light" id="alamat_tkra"
                        placeholder="Alamat TK / RA" required>
                    <label for="tanggal_sttb">Tanggal Surat Tanda Tamat Belajar/STTB/Ijazah<i><b> (biarkan kosong jika tidak/belum punya)</b></i></label>
                        <input value="{{old('tanggal_sttb')}}" name="tanggal_sttb" type="date" class="form-control bg-light"
                        id="tanggal_sttb">
                    <label for="nomor_sttb">Nomor Surat Tanda Tamat Belajar/STTB/Ijazah <i><b> (biarkan kosong jika tidak/belum punya)</b></i></label>
                        <input value="{{old('nomor_sttb')}}" name="nomor_sttb" type="text" class="form-control bg-light" id="nomor_sttb"
                        placeholder="Nomor Surat Tanda Tamat Belajar/STTB/Ijazah">
                    <label for="kesulitan_di_tkra">Kesulitan Yang Dialami Di TK/RA <i><b> (biarkan kosong jika tidak punya)</b></i></label>
                    <textarea name="kesulitan_di_tkra" class="form-control bg-light" id="kesulitan_di_tkra" rows="2"
                        placeholder="Kesulitan Yang Dialami Di TK/RA">{{old('kesulitan_di_tkra')}}</textarea>
                    <label for="bakat_minat_anak">Bakat dan Minat Anak <b>*</b></label>
                    <textarea name="bakat_minat_anak" class="form-control bg-light" id="bakat_minat_anak" rows="2"
                        placeholder="Bakat dan Minat Anak" required>{{old('bakat_minat_anak')}}</textarea>
                    <label for="prestasi_belajar">Prestasi Belajar di TK/RA <i><b> (biarkan kosong jika tidak punya)</b></i></label>
                    <textarea name="prestasi_belajar" class="form-control bg-light" id="prestasi_belajar" rows="2"
                        placeholder="Prestasi Belajar di TK/RA">{{old('prestasi_belajar')}}</textarea>

                </div>
            </div>

            <hr>
            <h3><i class="nav-icon fas fa-user-friends my-1 btn-sm-1"></i> Data Keluarga</h3>
            <hr>
            <h4><i class="nav-icon fas fa-male"></i> Identitas Ayah</h4>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <label for="nama_ayah">Nama Lengkap Ayah <i><b>(sesuai Akta Kelahiran Peserta Didik)</b></i> <b>*</b></label>
                    <input value="{{old('nama_ayah')}}" name="nama_ayah" type="text" class="form-control bg-light" id="nama_ayah"
                        placeholder="Nama Lengkap Ayah" required>
                    <label for="tempat_lahir_ayah">Tempat Lahir Ayah<b>*</b></label>
                    <input value="{{old('tempat_lahir_ayah')}}" name="tempat_lahir_ayah" type="text" class="form-control bg-light" id="tempat_lahir_ayah"
                        placeholder="Tempat Lahir Ayah" required>
                    <label for="tgl_lahir_ayah">Tanggal Lahir Ayah<b>*</b></label>
                    <input value="{{old('tgl_lahir_ayah')}}" name="tgl_lahir_ayah" type="date" class="form-control bg-light"
                        id="tgl_lahir_ayah" required>   
                    <label for="agama_ayah">Agama Ayah <b>*</b></label>
                        <select name="agama_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="agama_ayah" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen ">Kristen </option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    <label for="kewarganegaraan_ayah">Kewarganegaraan Ayah <b>*</b></label>
                        <select name="kewarganegaraan_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="kewarganegaraan_ayah" required>
                            <option value="">-- Pilih Kewarganegaraan --</option>
                            <option value="WNI">WNI (Warga Negara Indonesia)</option>
                            <option value="WNA">WNA (Warga Negara Asing)</option>
                        </select>
                    <label for="pendidikan_ayah">Pendidikan Terakhir Ayah <b>*</b></label>
                        <select name="pendidikan_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="pendidikan_ayah" required>
                            <option value="">-- Pilih Pendidikan Ayah --</option>
                            <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                            <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    <label for="pekerjaan_ayah">Pekerjaan Ayah <b>*</b></label>
                        <select name="pekerjaan_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="pekerjaan_ayah" required>
                            <option value="">-- Pilih Pekerjaan Ayah --</option>
                            <option value="Petani/Pekebun">Petani/Pekebun</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Sopir">Sopir</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Guru">Guru</option>
                            <option value="Lainnya....">Lainnya....</option>
                        </select>
                    <label for="instansi_kerja_ayah">Nama Instansi Tempat Kerja Ayah <i><b> (biarkan kosong jika ayah tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('instansi_kerja_ayah')}}" name="instansi_kerja_ayah" type="text" class="form-control bg-light" id="instansi_kerja_ayah"
                        placeholder="Nama Instansi Tempat Kerja Ayah">
                </div>
                <div class="col-lg-6 col-md-6">
                <label for="jabatan_kerja_ayah">Jabatan Kerja Ayah <i><b> (biarkan kosong jika ayah tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('jabatan_kerja_ayah')}}" name="jabatan_kerja_ayah" type="text" class="form-control bg-light" id="jabatan_kerja_ayah"
                        placeholder="Jabatan Kerja Ayah">
                    <label for="alamat_kantor_ayah">Alamat Kantor Ayah <i><b> (biarkan kosong jika ayah tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('alamat_kantor_ayah')}}" name="alamat_kantor_ayah" type="text" class="form-control bg-light" id="alamat_kantor_ayah"
                        placeholder="Alamat Kantor Ayah">
                    <label for="lama_kerja_ayah_perhari">Lama Kerja Ayah Perhari <b>*</b></label>
                        <select name="lama_kerja_ayah_perhari" class="custom-select my-1 mr-sm-1 bg-light" id="lama_kerja_ayah_perhari" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Seharian">Seharian</option>
                            <option value="Kurang Dari 8 jam">Kurang Dari 8 jam</option>
                            <option value="8 jam">8 jam</option>
                            <option value="Lebih Dari 8 jam">Lebih Dari 8 jam</option>
                        </select>
                    <label for="penghasilan_ayah">Penghasilan Ayah Perbulan <b>*</b></label>
                        <select name="penghasilan_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="penghasilan_ayah" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                            <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                            <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-</option>
                            <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-</option>
                            <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                        </select>
                    <label for="alamat_ayah">Alamat Rumah Ayah <i><b> (isikan alamat lengkap)</b></i> <b>*</b></label>
                        <input value="{{old('alamat_ayah')}}" name="alamat_ayah" type="text" class="form-control bg-light" id="alamat_ayah"
                        placeholder="Alamat Rumah Ayah" required>
                    <label for="no_hp_ayah">Nomor HP Ayah <i><b> (biarkan kosong jika tidak punya)</b></i></label>
                        <input value="{{old('no_hp_ayah')}}" name="no_hp_ayah" type="text" class="form-control bg-light" id="no_hp_ayah"
                        placeholder="Nomor HP Ayah">
                    <label for="hubungan_ayah">Hubungan Ayah Dengan Peserta Didik <b>*</b></label>
                        <select name="hubungan_ayah" class="custom-select my-1 mr-sm-1 bg-light" id="hubungan_ayah" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Ayah Kandung">Ayah Kandung</option>
                            <option value="Ayah Tiri">Ayah Tiri</option>
                            <option value="Ayah Angkat">Ayah Angkat</option>
                            <option value="Lainnya....">Lainnya....</option>
                           
                        </select>
                </div>
            </div>
            <hr>
            <h4><i class="nav-icon fas fa-female"></i> Identitas Ibu</h4>
            <hr>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <label for="nama_ibu">Nama Lengkap Ibu <i><b>(sesuai Akta Kelahiran Peserta Didik)</b></i> <b>*</b></label>
                    <input value="{{old('nama_ibu')}}" name="nama_ibu" type="text" class="form-control bg-light" id="nama_ibu"
                        placeholder="Nama Lengkap Ibu" required>
                    <label for="tempat_lahir_ibu">Tempat Lahir Ibu<b>*</b></label>
                    <input value="{{old('tempat_lahir_ibu')}}" name="tempat_lahir_ibu" type="text" class="form-control bg-light" id="tempat_lahir_ibu"
                        placeholder="Tempat Lahir Ibu" required>
                    <label for="tgl_lahir_ibu">Tanggal Lahir Ibu<b>*</b></label>
                    <input value="{{old('tgl_lahir_ibu')}}" name="tgl_lahir_ibu" type="date" class="form-control bg-light"
                        id="tgl_lahir_ibu" required>   
                    <label for="agama_ibu">Agama Ibu <b>*</b></label>
                        <select name="agama_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="agama_ibu" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen ">Kristen </option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    <label for="kewarganegaraan_ibu">Kewarganegaraan Ibu <b>*</b></label>
                        <select name="kewarganegaraan_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="kewarganegaraan_ibu" required>
                            <option value="">-- Pilih Kewarganegaraan --</option>
                            <option value="WNI">WNI (Warga Negara Indonesia)</option>
                            <option value="WNA">WNA (Warga Negara Asing)</option>
                        </select>
                    <label for="pendidikan_ibu">Pendidikan Terakhir Ibu <b>*</b></label>
                        <select name="pendidikan_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="pendidikan_ibu" required>
                            <option value="">-- Pilih Pendidikan Ibu --</option>
                            <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                            <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    <label for="pekerjaan_ibu">Pekerjaan Ibu <b>*</b></label>
                        <select name="pekerjaan_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="pekerjaan_ibu" required>
                            <option value="">-- Pilih Pekerjaan ibu --</option>
                            <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                            <option value="Petani/Pekebun">Petani/Pekebun</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Sopir">Sopir</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Guru">Guru</option>
                            <option value="Lainnya....">Lainnya....</option>
                        </select>
                    <label for="instansi_kerja_ibu">Nama Instansi Tempat Kerja Ibu <i><b> (biarkan kosong jika ibu tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('instansi_kerja_ibu')}}" name="instansi_kerja_ibu" type="text" class="form-control bg-light" id="instansi_kerja_ibu"
                        placeholder="Nama Instansi Tempat Kerja Ibu">
                </div>
                <div class="col-lg-6 col-md-6">
                <label for="jabatan_kerja_ibu">Jabatan Kerja Ibu <i><b> (biarkan kosong jika ibu tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('jabatan_kerja_ibu')}}" name="jabatan_kerja_ibu" type="text" class="form-control bg-light" id="jabatan_kerja_ibu"
                        placeholder="Jabatan Kerja ibu">
                    <label for="alamat_kantor_ibu">Alamat Kantor Ibu <i><b> (biarkan kosong jika ibu tidak bekerja di instansi)</b></i></label>
                        <input value="{{old('alamat_kantor_ibu')}}" name="alamat_kantor_ibu" type="text" class="form-control bg-light" id="alamat_kantor_ibu"
                        placeholder="Alamat Kantor ibu">
                    <label for="lama_kerja_ibu_perhari">Lama Kerja Ibu Perhari <b>*</b></label>
                        <select name="lama_kerja_ibu_perhari" class="custom-select my-1 mr-sm-1 bg-light" id="lama_kerja_ibu_perhari" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Seharian">Seharian</option>
                            <option value="Kurang Dari 8 jam">Kurang Dari 8 jam</option>
                            <option value="8 jam">8 jam</option>
                            <option value="Lebih Dari 8 jam">Lebih Dari 8 jam</option>
                        </select>
                    <label for="penghasilan_ibu">Penghasilan Ibu Perbulan <b>*</b></label>
                        <select name="penghasilan_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="penghasilan_ibu" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Kurang dari Rp.500.000,-">Kurang dari Rp.500.000,-</option>
                            <option value="Rp.500.000,- s/d Rp.999.000,-">Rp.500.000,- s/d Rp.999.000,-</option>
                            <option value="Rp.1.000.000,- s/d Rp.1.999.000,-">Rp.1.000.000,- s/d Rp.1.999.000,-</option>
                            <option value="Rp.2.000.000,- s/d Rp.2.999.000,-">Rp.2.000.000,- s/d Rp.2.999.000,-</option>
                            <option value="Lebih dari Rp.3.000.000,-">Lebih dari Rp.3.000.000,-</option>
                        </select>
                    <label for="alamat_ibu">Alamat Rumah Ibu <i><b> (isikan alamat lengkap)</b></i> <b>*</b></label>
                        <input value="{{old('alamat_ibu')}}" name="alamat_ibu" type="text" class="form-control bg-light" id="alamat_ibu"
                        placeholder="Alamat Rumah ibu" required>
                    <label for="no_hp_ibu">Nomor HP ibu <i><b> (biarkan kosong jika tidak punya)</b></i></label>
                        <input value="{{old('no_hp_ibu')}}" name="no_hp_ibu" type="text" class="form-control bg-light" id="no_hp_ibu"
                        placeholder="Nomor HP ibu">
                    <label for="hubungan_ibu">Hubungan Ibu Dengan Peserta Didik <b>*</b></label>
                        <select name="hubungan_ibu" class="custom-select my-1 mr-sm-1 bg-light" id="hubungan_ibu" required>
                            <option value="">-- Pilih Data --</option>
                            <option value="Ibu Kandung">Ibu Kandung</option>
                            <option value="Ibu Tiri">Ibu Tiri</option>
                            <option value="Ibu Angkat">Ibu Angkat</option>
                            <option value="Lainnya....">Lainnya....</option>
                           
                        </select>
                </div>
            </div>

            <hr><hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> DAFTAR</button>
            <a class="btn btn-danger btn-sm" href="/" role="button"><i class="fas fa-undo"></i> BATAL</a>
            <hr>
        </form>
    </div>
    </section>
    <!-- our_latest_blog_end -->
@endsection