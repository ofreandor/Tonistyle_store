@extends('admin.layouts.app')
@section('main-content')
    <style>
        textarea {
            resize: none;
        }
    </style>
<div class="wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 py-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header bg-secondary">
                                <h3 class="card-title">Product Details</h3>
                            </div>

                                <div class="card-body">
                                        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Product name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" placeholder="Product name" name="product_name">
                                                        @error('product_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Company Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="₦ 2,4053.00" name="price">

                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Product Selling Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control @error('selling_price') is-invalid @enderror" placeholder="₦ 2,4053.00"
                                                            name="selling_price">
                                                        @error('selling_price')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Product Category <span class="text-danger">*</span></label>
                                                        <select class="form-control form-select @error('price') is-invalid @enderror" id="" name="category_id">
                                                            <option disabled="" selected="">Select Category</option>
                                                            @foreach ($categories as $category )
                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Product Brand <span class="text-danger">*</span></label>
                                                        <select class="form-control form-select @error('brand_id') is-invalid @enderror"  name="brand_id">
                                                            <option disabled="" selected="">Select Brand</option>
                                                            @foreach ($brands as $brand )
                                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Quantity <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity Eg. 10" name="quantity">
                                                        @error('quantity')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Color <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control @error('color') is-invalid @enderror" placeholder="Eg. Red, Blue" name="color">
                                                        @error('color')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label>Discount <span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control @error('discount') is-invalid @enderror" placeholder="" name="discount">
                                                        @error('discount')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Size</label>
                                                        <input type="text" class="form-control" placeholder="Eg. Meduim" name="size">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Status <span class="text-danger">*</span></label>
                                                            <select type="text" class="form-control select2 select2-hidden-accessible @error('status') is-invalid @enderror" id="status" name="status" required>
                                                                <option selected="" disabled="">Select Status</option>
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                            </select>
                                                            @error('product_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <span>{{ $message }}</span>
                                                            </span>
                                                            @enderror
                                                    </div>
                                                </div>



                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Product Image <span class="text-danger">*</span> <span class="text-muted">add at least 1 picture</span></label>
                                                            <input type="file" name="product_image[]" class="form-control @error('product_image') is-invalid @enderror" multiple accept="image/*" required>
                                                                @error('product_image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <span>{{ $message }}</span>
                                                                    </span>
                                                                @enderror
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Features <span class="text-danger">*</span></label>
                                                        <textarea class="form-control @error('features') is-invalid @enderror" name="features" id="" cols="10" rows="10"></textarea>
                                                        @error('features')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>



                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="10"
                                                            rows="10"></textarea>
                                                        @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <span>{{ $message }}</span>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="justify-content-between py-3">
                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>

                                            </div>

                                        </form>
                                    </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

</div>

@endsection
