<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB Online SDI Darut Tauhid Tambakboyo | Tapel 2020/2021</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/edumark/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/edumark/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h6 class="page-header">
          <i class="fas fa-globe"></i> PPDB Online SDI Darut Tauhid Tambakboyo
          <small class="float-right">Tahun Pelejaran 2020/2021</small>
        </h6>
      </div>
      <!-- /.col -->
    </div>
      <!-- info row -->
      <div class="row invoice-info my-0 mr-sm-0">
        <div class="col-sm-2 invoice-col my-0 mr-sm-0">
          <img id="logo" src="/edumark/img/logo_yayasan.png" alt="Logo Instansi" class="rounded" width="75">
        </div>
        <!-- /.col -->
        <div class="col-sm-8 invoice-col my-0 mr-sm-0">
          <center>
            <address class="justify-content-center">
              <h4>
                <strong>PENDAFTARAN PESERTA DIDIK BARU</strong><br>
                <strong>SDI DARUT TAUHID TAMBAKBOYO</strong> <br>
                Tahun Pelajaran 2020/2021
              </h4>
            </address>
          </center>
        </div>
        <div class="col-sm-2 invoice-col my-0 mr-sm-0">
                    
        </div>
        <!-- /.col -->
      </div>
      <hr>
    <!-- /.row -->
    <tr>
      <center>
        <address class="justify-content-center">
          <strong><h3>BUKTI PENDAFTARAN ONLINE</h3></strong>
        </address>
      </center>
    </tr>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          Nomor Pendaftaran :
          <address>
            <strong>202100{{$pesdik->id}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Tanggal Daftar :
          <address>
            <strong>{{$pesdik->created_at}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Tanggal Cetak :
          <address>
            <strong><?php echo date("d-m-Y h:i:s");?></strong>
          </address>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <p class="lead  my-1 mr-sm-1">I. Identitas Peserta Didik</p>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3 ">
            Nama Lengkap
          </div>
          <div class="col-sm-9">
            : {{$pesdik->nama_lengkap}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Nama Panggilan
          </div>
          <div class="col-sm-9">
            : {{$pesdik->nama_panggilan}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Tempat, Tanggal Lahir
          </div>
          <div class="col-sm-9">
            : {{$pesdik->tempat_lahir}}, {{$pesdik->tgl_lahir}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Jenis Kelamin
          </div>
          <div class="col-sm-9">
            : {{$pesdik->jenis_kelamin}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Berat / Tinggi Badan
          </div>
          <div class="col-sm-9">
            : {{$pesdik->berat_badan}} kg / {{$pesdik->tinggi_badan}} cm
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Golongan Darah
          </div>
          <div class="col-sm-9">
            : {{$pesdik->golongan_darah}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Penyakit Yang Pernah Diderita
          </div>
          <div class="col-sm-9">
            : {{$pesdik->penyakit_pernah_derita}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Agama
          </div>
          <div class="col-sm-9">
            : {{$pesdik->agama}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Kewarganegaraan
          </div>
          <div class="col-sm-9">
            : {{$pesdik->kewarganegaraan}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Tinggal Bersama
          </div>
          <div class="col-sm-9">
            : {{$pesdik->tinggal_bersama}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Anak Ke
          </div>
          <div class="col-sm-9">
            : {{$pesdik->anak_ke}} dari {{$pesdik->saudara_kandung}} saudara
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Bahasa Sehari-hari Dikeluarga
          </div>
          <div class="col-sm-9">
            : {{$pesdik->bahasa_sehari}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Jarak Rumah Ke Sekolah
          </div>
          <div class="col-sm-9">
            : {{$pesdik->jarak_rumah_kesekolah}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Asal TK/RA
          </div>
          <div class="col-sm-9">
            : {{$pesdik->asal_tkra}} Alamat : {{$pesdik->alamat_tkra}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Tanggal Dan Nomor STTB 
          </div>
          <div class="col-sm-9">
            : {{$pesdik->tanggal_sttb}}  {{$pesdik->nomor_sttb}} 
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Kesulitan Yang Dialami DI TK/RA
          </div>
          <div class="col-sm-9">
            : {{$pesdik->kesulitan_di_tkra}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Bakat dan Minat Anak 
          </div>
          <div class="col-sm-9">
            : {{$pesdik->bakat_minat_anak}}
          </div>
        </div>
        <div class="form-group row my-1 mr-sm-1">
          <div class="col-sm-3">
            Prestasi Belajar Di TK/RA
          </div>
          <div class="col-sm-9">
            : {{$pesdik->prestasi_belajar}}
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div><br>
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <p class="lead">II. Data Keluarga</p>
          <table class="table table-striped my-1 mr-sm-1">
            <thead>
              <tr>
                <th>Uraian</th>
                <th>Data Ayah</th>
                <th>Data Ibu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nama Lengkap</td>
                <td>{{$pesdik->nama_ayah}}</td>
                <td>{{$pesdik->nama_ibu}}</td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>{{$pesdik->tempat_lahir_ayah}}, {{$pesdik->tgl_lahir_ayah}}</td>
                <td>{{$pesdik->tempat_lahir_ibu}}, {{$pesdik->tgl_lahir_ibu}}</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>{{$pesdik->agama_ayah}}</td>
                <td>{{$pesdik->agama_ibu}}</td>
              </tr>
              <tr>
                <td>Kewarganegaraan</td>
                <td>{{$pesdik->kewarganegaraan_ayah}}</td>
                <td>{{$pesdik->kewarganegaraan_ibu}}</td>
              </tr>
              <tr>
                <td>Pendidikan Terakhir</td>
                <td>{{$pesdik->pendidikan_ayah}}</td>
                <td>{{$pesdik->pendidikan_ibu}}</td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>{{$pesdik->pekerjaan_ayah}}</td>
                <td>{{$pesdik->pekerjaan_ibu}}</td>
              </tr>
              <tr>
                <td>Jabatan / Nama Instansi Tempat Kerja</td>
                <td>{{$pesdik->jabatan_kerja_ayah}}, {{$pesdik->instansi_kerja_ayah}}</td>
                <td>{{$pesdik->jabatan_kerja_ibu}}, {{$pesdik->instansi_kerja_ibu}}</td>
              </tr>
              <tr>
                <td>Penghasilan Perbulan</td>
                <td>{{$pesdik->penghasilan_ayah}}</td>
                <td>{{$pesdik->penghasilan_ibu}}</td>
              </tr>
              <tr>
                <td>Alamat Rumah</td>
                <td>{{$pesdik->alamat_ayah}}</td>
                <td>{{$pesdik->alamat_ibu}}</td>
              </tr>
              <tr>
                <td>Nomor HP</td>
                <td>{{$pesdik->no_hp_ayah}}</td>
                <td>{{$pesdik->no_hp_ibu}}</td>
              </tr>
            </tbody>
          </table>
          <hr>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
