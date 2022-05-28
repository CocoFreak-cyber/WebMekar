
@extends('welcome')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
<tr>
<th>No</th>
<th>Visi</th>
<th>Misi</th>
<th>About</th>
<th>Logo</th>
<th>Alamat</th>
<th>E-mail</th>
<th>Contact Person</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=0 ?>
@foreach ($pro as $pro)
<?php $no++ ?>
<tr>
<td>{{ $pro->id  }}</td>
<td>{{ $pro->visi }}</td>
<td>{{ $pro->misi }}</td>
<td>{{ $pro->about }}</td>
<td>                     
<img src="{{ url('/img/' . $pro->logo) }}" width="100px" height="100px" class="img-rounded">                 
</td> 
<td>{{ $pro->alamat }}</td>
<td>{{ $pro->email }}</td>
<td>{{ $pro->telpon }}</td>

<td>
	<a href="/Profile/edit/{{ $pro->id }}" type="button" class="btn btn-primary">Edit</a>
</td>
</tr>
@endforeach
</tbody>
</table>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection