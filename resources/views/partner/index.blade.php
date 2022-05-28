@extends('welcome')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Partner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Partner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
		  <!-- <h3 class="card-title">Master Barang</h3> -->

<table class="table table-hover table-striped">

<thead>
<a href="{{ url('/master/tambah') }}" type="button" class="btn btn-primary">Tambah</a><br><br>
<tr>
<th>No</th>
<th>Nama</th>
<th>Foto</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php $no=0 ?>
@foreach ($por as $por)
<?php $no++ ?>
<tr>
<td>{{ $por->id  }}</td>
<td>{{ $por->nama }}</td>
<td>{{ $por->foto }}</td>
<td>{{ $por->keterangan }}</td>
<td>
	<a href="/master/edit/{{ $por->id }}" type="button" class="btn btn-primary">Edit</a>
</td>
</tr>
@endforeach
</tbody>
</table>
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
