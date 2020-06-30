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
                <span class="info-box-text"><h2>DATA PENDIDIKAN PT. TORABIKA</h2></span>
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
                <form action="{{ route('pendidikan.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="pendidikan">Pilih Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="nama_pendidikan">
                      <option value="SD" {{ old('pendidikan') == 'SD' ? 'selected' : ' '}}>SD</option>
                      <option value="SMP" {{ old('pendidikan') == 'SMPr' ? 'selected' : ' '}}>SMP</option>
                      <option value="SMA" {{ old('pendidikan') == 'SMA' ? 'selected' : ' '}}>SMA</option>
                      <option value="Strata 1" {{ old('pendidikan') == 'Strata 1' ? 'selected' : ' '}}>Strata 1</option>
                      <option value="Strata 2" {{ old('pendidikan') == 'Strata 2' ? 'selected' : ' '}}>Strata 2</option>
                      <option value="Strata 3" {{ old('pendidikan') == 'Strata 3' ? 'selected' : ' '}}>Strata 3</option>
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