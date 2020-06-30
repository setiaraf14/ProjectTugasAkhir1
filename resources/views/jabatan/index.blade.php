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
                <h5 class="card-title">Form Jabatan</h5>
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
                      <th scope="col">Jabatan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jabatan as $item)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        @if ($item->nama_jabatan == "Full Stack Develooper" )
                          <td><button class="btn btn-primary p-1">{{ $item->nama_jabatan }}</button></td>
                        @else
                          <td><button class="btn btn-success p-1">{{ $item->nama_jabatan }}</button></td>
                        @endif
                        <td>
                          <div class="d-flex justify-content-start">
                            <a href="{{ route('jabatan.edit', $item->id) }}" class="btn btn-primary p-1 mr-1"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('jabatan.destroy', ['jabatan' => $item->id]) }}" method="POST">
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