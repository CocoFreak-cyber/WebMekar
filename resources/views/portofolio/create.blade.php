@extends('welcome')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Portofolio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portofolio</li>
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

 {!! Form::open(['url'=>'Admin/Portofolio/store', 'method'=>'post', 'files'=>true]) !!} 
  {{ csrf_field() }}
 <div class="row ">
 <div class="col-md-10 desain" id ="site-content">
        <table>
 <br>
   <h2><legend>Tambah Portofolio</legend></h2>
  <div class="panel-body">
  <br>
 
  <div class="form-group {!! $errors->has('nama') ? 'has-error' : ''!!}">
 {!! Form::label('nama', 'Nama Portofolio') !!}
 {!! Form::text('nama', null, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group {!! $errors->has('keterangan') ? 'has-error' : ''!!}">
 {!! Form::label('keterangan', 'Keterangan Portofolio') !!}
 {!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
</div>        
<div class="form-group {!! $errors->has('foto') ? 'has-error' : '' !!}">
 {!! Form::label('foto', 'Foto Portofolio (jpeg, png)') !!}
 {!! Form::file('foto') !!}
</div>
   </table>
 </div> 
 <div class="col-md-10 desain" id ="site-content">
 <div class="text-right">
 {!! Form::submit( 'Save', ['class'=>'btn btn-primary']) !!}
 {!! Form::close() !!}
 
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop