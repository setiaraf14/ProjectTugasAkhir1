@extends('layouts.app')
 

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          
          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text"><h2>DATA KARYAWAN PT. TORABIKA</h2></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    
        </div>
        <!-- /.row -->
    
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Form Jabatan</h5>
              </div>
              <!-- /.card-header -->
    
    
              <div class="card-body">
                <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                    @method('PATCH')
                  @csrf
                  <div class="form-group">
                    <label for="nama_jabatan">Masukan Jabatan</label>
                    <input type="text" name="nama_jabatan" for="nama_jabatan" class="form-control @error('nama_jabatan') is-invalid @enderror" value="{{ old('nama_jabatan') ?? $jabatan->nama_jabatan }}">
                    @error('nama_jabatan')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
              <!-- ./card-body -->
    
    
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!--/. container-fluid -->
</div>
@endsection