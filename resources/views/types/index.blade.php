@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<!-- START DATA -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tipe Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Tipe obat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href='{{url('types/create')}}' class="btn btn-primary">+ Tambah Data</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importModal">import</button>
                        </div> 
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">ID Tipe Obat</th>
                                        <th class="col-md-2">Nama</th>
                                        <th class="col-md-4">Deskripsi</th>
                                        <th class="col-md-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)                
                                    <tr>
                                        <td>000{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <a href='{{url('types/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                            <form class="d-inline" action="{{url('types/'.$item->id)}}" method="POST">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
        <!-- Modal Import-->
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="importModalLabel">Import Tipe Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('type.import')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group mb-3">
                <label for="">Pilih File</label>
                <input type="file" name="file" class="form-control">
              </div>
              <button class="btn btn-success" type="submit">import</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="{{asset('alte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('alte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('alte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('alte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('alte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('alte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('alte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('alte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('alte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
...
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": [
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: [0, 1, 2] // Menentukan kolom mana yang akan di-export (kolom 0, 1, 2) - sesuaikan dengan data Anda
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: [0, 1, 2] // Menentukan kolom mana yang akan di-export (kolom 0, 1, 2) - sesuaikan dengan data Anda
          }
        },
        {
          extend: 'print',
          exportOptions: {
            columns: [0, 1, 2] // Menentukan kolom mana yang akan di-export (kolom 0, 1, 2) - sesuaikan dengan data Anda
          }
        },
        {
          extend: 'colvis',
          columns: ':not(.noVis)' // Menyembunyikan kolom 'Aksi'
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq()');
    // ... sisa script
  }); 
</script>
</body>
</html>
