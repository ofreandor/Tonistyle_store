@extends('admin.layouts.app')
@section('admin.styles')

        <link rel="stylesheet" href="{{ asset('backend/dist/css/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css?v=3.2.0') }}">
@endsection
@section('main-content')
    <div class="wrapper">
            <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Brand</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Brand</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title py-2">All Tonistyle Store Product Brands Available</h3>
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#brandModal">
                                            Add New Brand
                                        </button>
                                    </div>
                                    @include('admin.brand.add')
                                </div>

                                    <div class="card-body py-3">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Brand Name</th>
                                                    <th>Brand Status</th>
                                                    <th>Created Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                 $rowNumber = 1;
                                                @endphp

                                                @foreach ($brands as $key => $brand)

                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $brand->brand_name }}</td>
                                                    <td>
                                                        @if ($brand->brand_status == 'active')
                                                        <span class="badge bg-success">Active</span>
                                                        @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($brand->created_at)->format('jS M Y') }}</td>
                                                    <td>
                                                        <div style="display: flex; align-items: center;">
                                                           <a type="button" data-toggle="modal" data-target="#editbrandModal{{ $brand->id }}" class="edit_cat">
                                                                <i class="fas fa-edit mr-3 text-secondary"></i>
                                                            </a>

                                                            @include('admin.brand.edit')

                                                        </div>
                                                    </td>

                                                </tr>
                                                    @php
                                                    $rowNumber++;
                                                    @endphp
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

    </div>


    @endsection



    @section('admin.scripts')
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
        <script>
                $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
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

            <script>
                function confirmDelete(id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm').action = '/delete/brand/' + id;
                            document.getElementById('deleteForm').submit();
                        }
                    });
                }
            </script>



    @endsection






