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
                <li class="breadcrumb-item"><a href="/">Leaderboards</a></li>
                <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div><!-- /.col -->

            <img src="{{ asset('vendors/dist/img/user1-128x128.jpg') }}" alt="" width="150" class="mr-3">
            
            <div>
                <h5>Beats ID: ZXKAR</h5>
                <h5>Perusahaan: BUMA</h5>
                <h5>Jabatan Struktural: </h5>
                <h5>Jabatan Fungsional: </h5>
                <h5>Site: LMO</h5>
            </div>
            
        
        </div><!-- /.row -->
        <a href="/" class="btn btn-primary btn-sm">Kembali</a>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection