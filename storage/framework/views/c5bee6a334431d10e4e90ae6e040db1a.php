<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('adminLTE/dist/css/adminlte.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('alte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('alte/dist/css/adminlte.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('alteplugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('alteplugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('alteplugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> No new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo e(asset('adminLTE/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo e(asset('adminLTE/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        
                    </div>
                </div>

                <!-- Sidebar Menu -->
                
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">
                                <?php echo $__env->yieldContent('title'); ?>
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="thead">
                            <tr>
                                <th>No</th>


                                <th>Aktivitas Group</th>
                                <th>Periode Akademik</th>
                                <th>Name </th>
                                <th>Name In English</th>
                                <th>Tingkat Prestasi </th>
                                <th>Peringkat </th>
                                <th>Jenis Aktivitas</th>
                                <th>Jabatan</th>
                                <th>Tempat Aktivitas</th>
                                <th>Tanggal Dimulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Jenis Dokumen </th>
                                <th>Dokumen </th>
                                <th>No Sk</th>
                                <th>Tanggal Sk</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Validasi</th>
                                <th>Validator</th>
                                <th>Tanggal di Validasi</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>No</td>


                            <td>Aktivitas Group</td>
                            <td>Periode Akademik</td>
                            <td>Name </td>
                            <td>Name In English</td>
                            <td>Tingkat Prestasi </td>
                            <td>Peringkat </td>
                            <td>Jenis Aktivitas</td>
                            <td>Jabatan</td>
                            <td>Tempat Aktivitas</td>
                            <td>Tanggal Dimulai</td>
                            <td>Tanggal Akhir</td>
                            <td>Jenis Dokumen </td>
                            <td>Dokumen </td>
                            <td>No Sk</td>
                            <td>Tanggal Sk</td>
                            <td>Tanggal Pengajuan</td>
                            <td>Validasi</td>
                            <td>Validator</td>
                            <td>Tanggal di Validasi</td>

                            <td></td>
                        </tbody>
                    </table>
                </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                made with ☕ to help your productivity
            </div>
            <!-- Default to the left -->
            <strong>Copyright
                
            rights
            reserved.
        </footer>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="<?php echo e(asset('alte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('alte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('alte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('alte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('alte/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('alte/dist/js/demo.js')); ?>"></script>
<!-- Page specific script -->
...
<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
    </script>
</body>
</html>
<?php /**PATH C:\laravel\stockManagement\resources\views/test/index.blade.php ENDPATH**/ ?>