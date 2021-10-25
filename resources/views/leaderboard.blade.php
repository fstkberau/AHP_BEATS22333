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
    
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Operator</h3>
          <form class="float-right" action="#" method="POST">
            {{ csrf_field() }}
            <input type="date" name="from" value="{{ date('Y-m-d')}}">&nbsp; 
            <input type="submit" value="View"> 
          </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Perusahaan</th>
              <th>Point</th>
              <th>Tanggal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td><a href="{{ url('detail') }}">Rio Rivaldo</a></td>
              <td>BUMA</td>
              <td>7</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Yosa Wulandari</td>
              <td>PAMA</td>
              <td>9</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Yosa Wulandari</td>
              <td>PAMA</td>
              <td>9</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Yosa Wulandari</td>
              <td>PAMA</td>
              <td>9</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Yosa Wulandari</td>
              <td>PAMA</td>
              <td>9</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Yosa Wulandari</td>
              <td>PAMA</td>
              <td>9</td>
              <td>20-10-2021</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Adhe Ias</td>
              <td>PAMA</td>
              <td>8</td>
              <td>20-10-2021</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Perusahaan</th>
              <th>Point</th>
              <th>Tanggal</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


@endsection