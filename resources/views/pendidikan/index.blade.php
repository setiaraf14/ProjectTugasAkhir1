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
                <span class="info-box-text"><h2>DATA JABATAN PT. TORABIKA</h2></span>
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
                <h5 class="card-title">Data Pendidikan</h5>
              </div>
              <!-- /.card-header -->
    
    
              <div class="card-body py-2">
                @if (session('Pesan'))
                    <div class="alert alert-success">
                        {{ session('Pesan') }}
                    </div>
                @endif
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Pendidikan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendidikan as $item)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        @if ($item->nama_pendidikan == "SD")
                          <td><button class="p-1 btn btn-danger">{{ $item->nama_pendidikan }}</button></td>
                        @elseif ($item->nama_pendidikan == "SMP")
                          <td><button class="p-1 btn btn-warning">{{ $item->nama_pendidikan }}</button></td>
                        @elseif ($item->nama_pendidikan == "SMA")
                          <td><button class="p-1 btn btn-success">{{ $item->nama_pendidikan }}</button></td>
                        @elseif ($item->nama_pendidikan == "Strata 1"| $item->nama_pendidikan == "Strata 2"| $item->nama_pendidikan == "Strata 3")
                          <td><button class="p-1 btn btn-primary">{{ $item->nama_pendidikan }}</button></td>
                        @endif
                        <td>
                          <div class="d-flex justify-content-start">
                            <form action="{{ route('pendidikan.destroy', ['pendidikan' => $item->id]) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger p-1"><i class="far fa-trash-alt"></i></button>                              
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    
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