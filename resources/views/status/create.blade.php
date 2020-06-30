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
                <span class="info-box-text"><h2>DATA STATUS JABATAN PT. TORABIKA</h2></span>
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
                <form action="{{ route('status.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="nama_status">Pilih Status</label>
                    <select class="form-control" id="pendidikan" name="nama_status">
                      <option value="Karyawan Tetap" {{ old('nama_status') == 'Karyawan Tetap' ? 'selected' : ' '}}>Karyawan Tetap</option>
                      <option value="Magang" {{ old('nama_status') == 'Magang' ? 'selected' : ' '}}>Magang</option>
                      <option value="Kontrak" {{ old('nama_status') == 'Kontrak' ? 'selected' : ' '}}>Kontrak</option>
                    </select>
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