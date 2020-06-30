@extends('layouts.app')
 
@section('js_css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          
          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text"><h2>Table Data Karyawan PT. TORABIKA</h2></span>
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
                <h5 class="card-title">Table Data Karyawan</h5>
              </div>
              <!-- /.card-header -->
    
    
              <div class="card-body">
                    @if (session('Pesan'))
                        <div class="alert alert-success">
                            {{ session('Pesan') }}
                        </div>
                    @endif
                    <table id="tabel-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No Telepon</th>
                                <th>Pendidikan</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($karyawan as $karyawans)
                             <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $karyawans->nama }}</td>
                              <td>{{ $karyawans->jabatan->nama_jabatan }}</td>
                              <td>{{ $karyawans->no_telepon }}</td>
                              <td>{{ $karyawans->pendidikan->nama_pendidikan }}</td>
                              <td>{{ $karyawans->jenis_kelamin }}</td>
                              <td>{{ $karyawans->status->nama_status }}</td>
                              <td>
                                <div class="d-flex justify-content-start">
                                  <a href="{{ route('karyawan.edit', $karyawans->id) }}" class="btn btn-info p-1 ml-1"><i class="fas fa-edit"></i></a>
                                  <a href="{{ route('karyawan.show', $karyawans->id) }}" class="btn btn-info p-1 ml-1"><i class="fas fa-eye"></i></a>
                                    <form action="{{ route('karyawan.destroy', ['karyawan' => $karyawans->id]) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="btn btn-danger p-1 ml-1"><i class="far fa-trash-alt"></i></button>                              
                                    </form>
                                </div>
                              </td>
                             </tr>
                            @empty
                                <td text-center>Data Kosong</td>
                            @endforelse
                        </tbody>
                    </table>
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


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
  </script>
@endsection

{{-- <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> --}}
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

@endsection

