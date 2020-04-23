@extends('layouts.master')
@section('content')
    <!-- bradcam_area_start -->
            <div class="bradcam_area breadcam_bg overlay2">
                <h3>Detail Calon Peserta Didik</h3>
            </div>
	<!-- bradcam_area_end -->

    <!-- our_latest_blog_start -->
    <section class="content card" style="padding: 10px 10px 20px 20px  ">
    <section class="content">
        {{csrf_field()}}
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/edumark/img/user.png"
                       alt="User profile picture" width="100">
                </div>

                <h3 class="profile-username text-center">{{$pesdik->nama_lengkap}}</h3>

                <p class="text-muted text-center">{{$pesdik->nama_panggilan}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    TTL <a class="float-right">{{$pesdik->tempat_lahir}}, {{$pesdik->tgl_lahir}}</a>
                  </li>
                  <li class="list-group-item">
                    Jenis Kelamin <a class="float-right">{{$pesdik->jenis_kelamin}}</a>
                  </li>
                  <li class="list-group-item">
                    TK/RA Asal <a class="float-right">{{$pesdik->asal_tkra}}</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><i class="fas fa-print"></i> Cetak Biodata Peserta Didik</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Peserta Didik</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Data Ayah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Data Ibu</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_lengkap" value="{{$pesdik->nama_lengkap}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_panggilan" value="{{$pesdik->nama_panggilan}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->tempat_lahir}}, {{$pesdik->tgl_lahir}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="jenis_kelamin" value="{{$pesdik->jenis_kelamin}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-sm-2 col-form-label">Berat/Tinggi Badan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="berat" value="{{$pesdik->berat_badan}} kg / {{$pesdik->tinggi_badan}} cm" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="golongan_darah" class="col-sm-2 col-form-label">Golongan Darah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="golongan_darah" value="{{$pesdik->golongan_darah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penyakit_pernah_derita" class="col-sm-2 col-form-label">Penyakit Yang Pernah Diderita</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penyakit_pernah_derita" value="{{$pesdik->penyakit_pernah_derita}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama" value="{{$pesdik->agama}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kewarganegaraan" value="{{$pesdik->kewarganegaraan}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggal_bersama" class="col-sm-2 col-form-label">Tinggal Bersama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="tinggal_bersama" value="{{$pesdik->tinggal_bersama}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="anak_ke" value="{{$pesdik->anak_ke}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saudara_kandung" class="col-sm-2 col-form-label">Saudara Kandung</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="saudara_kandung" value="{{$pesdik->saudara_kandung}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saudara_tiri" class="col-sm-2 col-form-label">Saudara Tiri</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="saudara_tiri" value="{{$pesdik->saudara_tiri}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saudara_angkat" class="col-sm-2 col-form-label">Saudara Angkat</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="saudara_angkat" value="{{$pesdik->saudara_angkat}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bahasa_sehari" class="col-sm-2 col-form-label">Bahasa Sehari-Hari Dikeluarga</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="bahasa_sehari" value="{{$pesdik->bahasa_sehari}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jarak_rumah_kesekolah" class="col-sm-2 col-form-label">Bahasa Sehari-Hari Dikeluarga</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="jarak_rumah_kesekolah" value="{{$pesdik->jarak_rumah_kesekolah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asal_tkra" class="col-sm-2 col-form-label">Asal TK/RA</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="asal_tkra" value="{{$pesdik->asal_tkra}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_tkra" class="col-sm-2 col-form-label">Alamat TK/RA</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_tkra" value="{{$pesdik->alamat_tkra}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sttb" class="col-sm-2 col-form-label">Tanggal & Nomor STTB</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="sttb" value="{{$pesdik->tanggal_sttb}} / {{$pesdik->nomor_sttb}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kesulitan_di_tkra" class="col-sm-2 col-form-label">Kesulitan Yang Dialami Di TK/RA</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kesulitan_di_tkra" value="{{$pesdik->kesulitan_di_tkra}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bakat_minat_anak" class="col-sm-2 col-form-label">Bakat dan Minat Anak</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="bakat_minat_anak" value="{{$pesdik->bakat_minat_anak}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prestasi_belajar" class="col-sm-2 col-form-label">Prestasi Belajar</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="prestasi_belajar" value="{{$pesdik->prestasi_belajar}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <div class="form-group row">
                        <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_ayah" value="{{$pesdik->nama_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->tempat_lahir_ayah}}, {{$pesdik->tgl_lahir_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama_ayah" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama_ayah" value="{{$pesdik->agama_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan_ayah" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kewarganegaraan_ayah" value="{{$pesdik->kewarganegaraan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pendidikan_ayah" value="{{$pesdik->pendidikan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pekerjaan_ayah" value="{{$pesdik->pekerjaan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="instansi_kerja_ayah" class="col-sm-2 col-form-label">Nama Instansi Tempat Kerja</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="instansi_kerja_ayah" value="{{$pesdik->instansi_kerja_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_kerja_ayah" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="jabatan_kerja_ayah" value="{{$pesdik->jabatan_kerja_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_kantor_ayah" class="col-sm-2 col-form-label">Alamat Kantor</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_kantor_ayah" value="{{$pesdik->alamat_kantor_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lama_kerja_ayah_perhari" class="col-sm-2 col-form-label">Lama Bekerja Perhari</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="lama_kerja_ayah_perhari" value="{{$pesdik->lama_kerja_ayah_perhari}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penghasilan_ayah" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penghasilan_ayah" value="{{$pesdik->penghasilan_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_ayah" value="{{$pesdik->alamat_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp_ayah" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="no_hp_ayah" value="{{$pesdik->no_hp_ayah}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_ayah" class="col-sm-2 col-form-label">Hubungan Dengan Anak</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="hubungan_ayah" value="{{$pesdik->hubungan_ayah}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="nama_ibu" value="{{$pesdik->nama_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tgl Lahir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="ttl" value="{{$pesdik->tempat_lahir_ibu}}, {{$pesdik->tgl_lahir_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="agama_ibu" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="agama_ibu" value="{{$pesdik->agama_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kewarganegaraan_ibu" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="kewarganegaraan_ibu" value="{{$pesdik->kewarganegaraan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pendidikan_ibu" value="{{$pesdik->pendidikan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="pekerjaan_ibu" value="{{$pesdik->pekerjaan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="instansi_kerja_ibu" class="col-sm-2 col-form-label">Nama Instansi Tempat Kerja</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="instansi_kerja_ibu" value="{{$pesdik->instansi_kerja_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_kerja_ibu" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="jabatan_kerja_ibu" value="{{$pesdik->jabatan_kerja_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_kantor_ibu" class="col-sm-2 col-form-label">Alamat Kantor</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_kantor_ibu" value="{{$pesdik->alamat_kantor_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lama_kerja_ibu_perhari" class="col-sm-2 col-form-label">Lama Bekerja Perhari</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="lama_kerja_ibu_perhari" value="{{$pesdik->lama_kerja_ibu_perhari}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penghasilan_ibu" class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="penghasilan_ibu" value="{{$pesdik->penghasilan_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat Rumah</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="alamat_ibu" value="{{$pesdik->alamat_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp_ibu" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="no_hp_ibu" value="{{$pesdik->no_hp_ibu}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hubungan_ibu" class="col-sm-2 col-form-label">Hubungan Dengan Anak</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="hubungan_ibu" value="{{$pesdik->hubungan_ibu}}" readonly>
                        </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </section>

    <!-- our_latest_blog_end -->
@endsection