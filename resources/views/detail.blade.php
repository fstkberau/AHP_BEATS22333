@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 mb-3">
                <h1 class="m-0">Detail Profil</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard/leaderboard') }}">Leaderboards</a></li>
                <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div><!-- /.col -->

            <img src="{{ asset('vendors/dist/img/user1-128x128.jpg') }}" alt="" width="150" class="ml-2 mr-3">
            
            <div>
                <h5>Beats ID: {{$data_bio['kode_sid']}}</h5>
                <h5>Nama: {{$data_bio['nama']}}</h5>
                <h5>Perusahaan: {{$data_bio['nama_perusahaan']}}</h5>
                <h5>Jabatan Struktural: {{$data_bio['jabatan_struktural']}}</h5>
                <h5>Jabatan Fungsional: {{$data_bio['jabatan_fungsional']}}</h5>
                <h5>Site: LMO</h5>
            </div>

        </div><!-- /.row -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <!-- Line chart -->
                <div class="card card-success card-outline">
                    <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Grafik Pelanggaran
                    </h3>
    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                        <div id="line-chart" style="height: 170px;"></div>
                    </div>
                    <!-- /.card-body-->
                </div>
                <!-- /.card -->
    
                <!-- Area chart -->
                <div class="card card-success card-outline">
                    <div class="card-header">
                    <h3 class="card-title">
                        Hazard
                    </h3>
    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                        <ul>
                        <h6>{{$data_bio['warning_type']}}</h6>
                        </ul>
                    </div>
                    <!-- /.card-body-->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
    
                <div class="col-md-12">
                <!-- Bar chart -->
                <div class="card card-success card-outline">
                    <div class="card-header">
                    <h3 class="card-title">
                        Coaching
                    </h3>
    
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                   
                    <div class="card-body">
                        <h6>Topik : {{$coaching['Topik_Coaching']}}</h6>
                        <h6>Nama Coach : {{$coaching['Nama_Coach']}}</h6>
                        <h6>Nama Peserta : {{$coaching['Nama_Coachee']}}</h6>
                        <h6>Tanggal Pelaksanaan : {{$coaching['Tanggal']}}-{{$coaching['Bulan']}}-{{$coaching['Tahun']}}</h6>
                        <h6>Nilai :{{$coaching['Hasil_Skor']}}</h6>
                        <h6>Kondisi : {{$coaching['Catatan_Coach']}}</h6>
                    </div>
                    <!-- /.card-body-->
                </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        
        <a href="/dashboard/leaderboard" class="btn btn-primary btn-sm">Kembali</a>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection