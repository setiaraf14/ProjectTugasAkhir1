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
                <span class="info-box-text"><h2>Form Edit Karyawan PT. TORABIKA</h2></span>
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
                <h5 class="card-title">Form Tambah Karyawan</h5>
              </div>
              <!-- /.card-header -->
    
    
              <div class="card-body">
                <form action="{{ route('karyawan.store') }}" method="POST">
                  @csrf

                  <div class="row mb-2">

                      <div class="col">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
                          @error('nama')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="col">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : ' ' }}>
                            Perempuan
                            </option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : ' ' }}>
                            laki-laki
                            </option>
                        </select>
                      </div>
                        
                  </div>

                  <div class="row mb-2">

                    <div class="col">
                      <label for="jabatan_id">Jabatan</label>
                      <select name="jabatan_id" id="jabatan_id" class="form-control">
                          @foreach ($jabatan as $jabatans)
                              <option value="{{ $jabatans->id }}" {{ old('jabatan_id')  == $jabatans->nama_jabatan ? 'selected' : ' ' }}>
                                  {{ $jabatans->nama_jabatan }}
                              </option>
                              @error('jabatan_id')
                                  <div class="text-danger">{{ $massage }}</div>
                              @enderror
                          @endforeach
                      </select>
                    </div>

                    <div class="col">
                      <label for="status_id">Status</label>
                      <select name="status_id" id="status_id" class="form-control">
                          @foreach ($status as $statuses)
                              <option value="{{ $statuses->id }}" {{ old('status_id') == $statuses->nama_jabatan ? 'selected' : ' ' }}>
                                  {{ $statuses->nama_status }}
                              </option>
                              @error('status_id')
                                  <div class="text-danger">{{ $massage }}</div>
                              @enderror
                          @endforeach
                      </select>
                    </div>

                  </div>

                  <div class="row mb-2">

                    <div class="col">
                      <label for="no_telepon">Nomor Telepon</label> 
                      <input type="number" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}">
                      @error('no_telepon')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col">
                      <label for="umur">Umur</label> 
                      <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur')}}">
                      @error('umur')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                  </div>

                  <div class="row mb-2">

                    <div class="col">
                      <label for="pendidikan_id">Pendidikan</label>
                      <select name="pendidikan_id" id="pendidikan_id" class="form-control">
                          @foreach ($pendidikan as $pendidikans)
                              <option value="{{ $pendidikans->id }}" {{ old('pendidikan_id') == $pendidikans->nama_pendidikan ? 'selected' : ' ' }}>
                                  {{ $pendidikans->nama_pendidikan }}
                              </option>
                              @error('jabatan_id')
                                  <div class="text-danger">{{ $massage }}</div>
                              @enderror
                          @endforeach
                      </select>
                    </div>

                    <div class="col">
                      <label for="tanggal_masuk">Tanggal Masuk</label>
                      <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" value="{{ old('tanggal_masuk') }}">
                      @error('tanggal_masuk')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                  </div>

            
                  <button type="submit" class="btn btn-primary mb-2">Simpan</button>

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