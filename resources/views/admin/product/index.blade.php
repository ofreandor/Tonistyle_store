@extends('admin.layouts.app')
@section('admin.styles')

<link rel="stylesheet"
    href="{{ asset('backend/dist/css/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
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
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                            <h3 class="card-title py-2">All Tonistyle Store Product products Available</h3>
                            <div class="ml-auto">
                                <a href="{{ route('create.product') }}" class="btn btn-primary">
                                    Add New Product
                                </a>
                            </div>
                            {{-- @include('admin.product.add') --}}
                        </div>

                        <div class="card-body py-3">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th width="700px">Product Name</th>
                                        <th>Product Code</th>
                                        <th width="700px">Image</th>
                                        <th width="500px">Product Price</th>
                                        <th>Product Brand</th>
                                        <th>Product Category</th>
                                        <th>Quantity</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $key => $product)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_code }}</td>
                                        <td>
                                          @if ($product->productImages->isNotEmpty())
                                             @foreach($product->productImages as $image)
                                                     <img src="{{ asset($image->product_image) }}" alt="Product Image" width="60px" height="50px">
                                             @endforeach
                                        @else
                                        No Image Available
                                        @endif
                                        </td>
                                        <td>&#8358; {{number_format($product->price) }}</td>
                                        <td>{{ $product->brand->brand_name }}</td>
                                        <td>{{ $product->category->category_name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->color }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>{{ $product->discount }}</td>
                                        <td>
                                            @if ($product->product_status == 'active')
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ \Carbon\Carbon::parse($product->created_at)->format('jS M Y') }}</td>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                                <a type="button" data-toggle="modal"
                                                    data-target="#editproductModal{{ $product->id }}" class="edit_cat">
                                                    <i class="fas fa-edit mr-3 text-secondary"></i>
                                                </a>
                                                @include('admin.product.edit')

                                                <form action="{{ route('delete.product', $product->id) }}" method="POST" id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" onclick="confirmDelete({{$product->id}})">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>

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
                            document.getElementById('deleteForm').action = '/delete/product/' + id;
                            document.getElementById('deleteForm').submit();
                        }
                    });
                }
</script>



@endsection
