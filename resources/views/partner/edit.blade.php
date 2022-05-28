@extends('welcome')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Partner</h1>
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
 <section class="about" id="about">
      <div class="container">
        
      {!! Form::model($part, ['route' => ['partner.update', $part],'method' =>'post','files'=> true])!!}             
  {{ csrf_field() }}
     		
  <div class="form-group {!! $errors->has('keterangan') ? 'has-error' : ''!!}">
 {!! Form::label('keterangan', 'Keterangan Partner') !!}
 {!! Form::textarea('keterangan', null, ['class'=>'form-control']) !!}
</div>        
<div class="form-group {!! $errors->has('logo') ? 'has-error' : '' !!}">
 {!! Form::label('logo', 'logo partner (jpeg, png)') !!}
 {!! Form::file('logo') !!}
</div>
                @if ($part->foto)
                <code>{{ $part->foto }}</code>
                @endif
                </div>

        <div class="row">
          <div class="col-md-4 offset-md-2">
            <h2 class="text-left"><a href="/Admin" class="btn btn-danger"> Kembali</a></h2>
          </div>
          <div class="col-md-4">
            <p>
            	<input type="submit" value="Simpan Data" class="btn btn-primary">
            </p>
          </div>
        </div>
       
		</form>
		
	</div>
  </section>
  
 
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop