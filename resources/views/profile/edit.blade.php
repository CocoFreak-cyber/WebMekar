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
 {!! Form::model($pro, ['route' => ['profile.update', $pro],'method' =>'post','files'=> true])!!}             
  {{ csrf_field() }}
 <div class="row ">
 <div class="col-md-10 desain" id ="site-content">
        <table>
 <br>
   <h2><legend>Tambah Profile</legend></h2>
  <div class="panel-body">
  <br>
  <div class="form-group {!! $errors->has('misi') ? 'has-error' : ''!!}">
 {!! Form::label('nolegal', 'nolegal') !!}
 {!! Form::text('nolegal', null, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group {!! $errors->has('about') ? 'has-error' : ''!!}">
 {!! Form::label('about', 'about') !!}
 {!! Form::text('about', null, ['class'=>'form-control']) !!}
</div>        

<div class="form-group {!! $errors->has('alamat') ? 'has-error' : ''!!}">
 {!! Form::label('alamat', 'alamat') !!}
 {!! Form::text('alamat', null, ['class'=>'form-control']) !!}
</div> 

<div class="form-group {!! $errors->has('email') ? 'has-error' : ''!!}">
 {!! Form::label('email', 'email') !!}
 {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div> 

<div class="form-group {!! $errors->has('telpon') ? 'has-error' : ''!!}">
 {!! Form::label('telpon', 'telpon') !!}
 {!! Form::text('telpon', null, ['class'=>'form-control']) !!}
</div> 

<div class="form-group {!! $errors->has('logo') ? 'has-error' : '' !!}">
 {!! Form::label('logo', 'logo (jpeg, png)') !!}
 {!! Form::file('logo') !!}
 @if ($pro->logo)
  <code>{{ $pro->logo }}</code>
@endif
</div>

<div class="form-group {!! $errors->has('scansk') ? 'has-error' : '' !!}">
 {!! Form::label('scansk', 'scansk (jpeg, png)') !!}
 {!! Form::file('scansk') !!}
 @if ($pro->scansk)
  <code>{{ $pro->scansk }}</code>
@endif
</div>
   </table>
 </div> 
 <div class="col-md-10 desain" id ="site-content">
 <div class="text-right">
 <div class="row">
          <div class="col-md-4 offset-md-2">
            <h2 class="text-left"><a href="/Admin" class="btn btn-danger"> Kembali</a></h2>
          </div>
          <div class="col-md-4">
            <p>
            {!! Form::submit( 'Save', ['class'=>'btn btn-primary']) !!}
            </p>
          </div>
        </div>
 
 {!! Form::close() !!}
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop      