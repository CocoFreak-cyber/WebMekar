@extends('welcome')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <h3 class="card-title">Admin</h3>
          </div>

        <!--card -->
        <div class="card col-md-10" style='margin:auto; margin-bottom:20px;margin-top:20px;'>
            <div class="card-header">
              <h3 class="card-title">Profile</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-hover table-striped">
            <thead>
            <tr>
            <th>No</th>
            <th>Scan SK</th>
            <th>No Legalitas</th>
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
            <td>                     
            <img src="{{ url('/img/SK/' . $pro->scansk) }}" width="100px" height="100px" class="img-rounded">                 
            </td> 
            <td>{{ $pro->nolegal }}</td>
            <td>{{ $pro->about }}</td>
            <td>                     
            <img src="{{ url('/img/Logo/' . $pro->logo) }}" width="100px" height="100px" class="img-rounded">                 
            </td> 
            <td>{{ $pro->alamat }}</td>
            <td>{{ $pro->email }}</td>
            <td>{{ $pro->telpon }}</td>

            <td>
                <a href="/Admin/Profile/edit/{{ $pro->id }}" type="button" class="btn btn-primary">Edit</a>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!--card -->
        <div class="card col-md-10" style='margin:auto; margin-bottom:20px;margin-top:20px;'>
            <div class="card-header">
              <h3 class="card-title">Portofolio <a href="{{ url('Admin/Portofolio/create') }}" type="button" class="btn btn-primary">Tambah</a></h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-hover table-striped">

<thead>
<th>No</th>
<th>Nama</th>
<th>Foto</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($por as $por)
<tr>
<td>{{ $por->id  }}</td>
<td>{{ $por->nama }}</td>
<td><img src="{{ url('/img/portofolio/' . $por->foto) }}" width="150px" height="150px" class="img-rounded"></td>
<td>{{ $por->keterangan }}</td>
<td>
	<a href="/Admin/Portofolio/edit/{{ $por->id }}" type="button" class="btn btn-primary">Edit</a>
  <a href="/Admin/Portofolio/delete/{{ $por->id }}" type="button" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!--card -->
        <div class="card col-md-10" style='margin:auto; margin-bottom:20px;margin-top:20px;'>
            <div class="card-header">
              <h3 class="card-title">Partner <a href="{{ url('/Admin/Partner/create') }}" type="button" class="btn btn-primary">Tambah</a></h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table class="table table-hover table-striped">

<thead>
<th>No</th>
<th>Logo</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($part as $part)
<tr>
<td>{{ $part->id  }}</td>
<td><img src="{{ url('/img/partner/' . $part->logo) }}" width="150px" height="150px" class="img-rounded"></td>
<td>{{ $part->keterangan }}</td>
<td>
	<a href="/Admin/Partner/edit/{{ $part->id }}" type="button" class="btn btn-primary">Edit</a>
  <a href="/Admin/Partner/delete/{{ $part->id }}" type="button" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       
      </div>
      <!-- /.card -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  
