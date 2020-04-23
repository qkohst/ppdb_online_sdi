@extends('layouts.master')
@section('content')
    <!-- bradcam_area_start -->
            <div class="bradcam_area breadcam_bg overlay2">
                <h3>Daftar Calon Peserta Didik</h3>
            </div>
	<!-- bradcam_area_end -->

    <!-- our_latest_blog_start -->
    <section class="content card" style="padding: 10px 10px 20px 20px  ">
    <div class="box">
        @if(session('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row table-responsive">
                    <table class="table table-head-fixed" id='calon_pesdik'>
                        <thead>
                            <tr class="bg-light">
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>TK/RA Asal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data_pesdik as $pesdik)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$pesdik->nama_lengkap}}</td>
                                <td>{{$pesdik->jenis_kelamin}}</td>
                                <td>{{$pesdik->asal_tkra}}</td>
                                <td>
                                <a href="/pesdik/{{$pesdik->id}}/detail"
                                    class="btn btn-primary btn-sm my-1 mr-sm-1"><i class="nav-icon fas fa-eye"></i> Lihat Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    </section>

    <!-- our_latest_blog_end -->
@endsection