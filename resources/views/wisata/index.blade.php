<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" defer></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.bagian.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Navbar -->
                @include('layouts.bagian.navbar')
                {{-- Navbar --}}

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>

                    <!-- Content Row -->


                    <!-- Content Row -->

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Kategori
                                <a href="{{ route('wisata.create') }}" class="btn btn-primary float-right">Tambah</a>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table myTable" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori Id</th>
                                                <th>Nama Wisata</th>
                                                <th>Alamat</th>
                                                <th>Deskripsi</th>
                                                <th>Fasilitas</th>
                                                <th>Biro Id</th>
                                                <th>Cover</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($wisata as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->kategori->nama }}</td>
                                                    <td>{{ $data->nama_wisata }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->deskripsi }}</td>
                                                    <td>{{ $data->fasilitas }}</td>
                                                    <td>{{ $data->biro->nama }}</td>
                                                    <td><img src="{{ $data->image() }}" alt=""
                                                            style="width:150px; height:150px;" alt="cover"> </td>
                                                    <td>
                                                        <form action="{{ route('wisata.destroy', $data->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('delete')
                                                            @csrf

                                                            <a href="{{ route('wisata.edit', $data->id) }}"
                                                                class="btn btn-success float-right">Ubah</a>
                                                            <a href="{{ route('wisata.show', $data->id) }}"
                                                                class="btn btn-warning float-right">Show</a>
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ini?');">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('/assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('/assets/js/demo/chart-pie-demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatabel').DataTable();
        });
    </script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
</body>

</html>
