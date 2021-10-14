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

            <table class="table col-sm-8">
                <thead>
                    <tr class="table-warning">
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Perusahaan</td>
                    <td>Point</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td><a href="detail">Rio Rivaldo</a></td>
                    <td>BUMA</td>
                    <td>80</td>
                    </tr>
                </tbody>
            </table>
        
        </div><!-- /.row -->
        <a href="/" class="btn btn-primary btn-sm">Kembali</a>
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection