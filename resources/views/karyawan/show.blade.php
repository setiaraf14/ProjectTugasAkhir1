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
                <h5 class="card-title">Detail Karyawan</h5>
              </div>
              <!-- /.card-header -->
    
    
              <div class="card-body">
                  <div class="row">

                    <div class="col-lg-6">
                        <div class="foto">
                            <div class="d-flex justify-content-start">
                                @if ($karyawan->jenis_kelamin == "Perempuan")
                                    <img src="{{ asset('img/dummy1.png') }}" class="rounded mx-auto d-block" alt="..." width="200px">
                                @else
                                    <img src="{{ asset('img/dummy2.png') }}" class="rounded mx-auto d-block" alt="..." width="200px">
                                @endif
                            </div>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="profile">
                            <div class="d-flex justify-content-end">
                              <table class="table table-hover">
                                  <tbody>
                                    <tr>
                                      <td>Nama Karyawan</td>
                                      <td>:</td>
                                      <td>{{ $karyawan->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->pendidikan->nama_pendidikan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->status->nama_status }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->no_telepon }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Masuk</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->tanggal_masuk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Umur</td>
                                        <td>:</td>
                                        <td>{{ $karyawan->umur }}</td>
                                    </tr>
                            </div>
                        </div>
                    </div>

                  </div>
                  

                  
                

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