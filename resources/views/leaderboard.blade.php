@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6 mb-3">
        <h1 class="m-0">Leaderboard AHP</h1>
      </div><!-- /.col -->

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active">Leaderboards</li>
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
            <td><a href="{{ url('detail') }}">Rio Rivaldo</a></td>
            <td>BUMA</td>
            <td>80</td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="#"> Adhe Ias</a></td>
            <td>PAMA</td>
            <td>75</td>
        </tr>
        </tbody>
      </table>
      
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@endsection