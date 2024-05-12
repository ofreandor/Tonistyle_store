@extends('admin.layouts.app')
@section('main-content')
        @if(session('toast') && session('message'))
        <script>
            Swal.fire({
                        icon: '{{ session('toast') }}',
                        title: '{{ session('message') }}',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
        </script>
        @endif

        <div class="wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">My Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    @php
                                    $brandCount = \App\Models\Brand::count();
                                    @endphp
                                    <h3>{{ $brandCount }}</h3>
                                    <p> Brand</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">

                                    @php
                                        $categoryCount = \App\Models\Category::count();
                                    @endphp
                                    <h3>{{ $categoryCount }}</h3>
                                    <p class="h4">Category</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    @php
                                    $productCount = \App\Models\Product::count();
                                    @endphp
                                    <h3>{{$productCount }}</h3>
                                    <p class="h4">Products</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53</h3>
                                    <p class="h4">Order</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>&#8358; 150,303.00</h3>
                                    <p class="h4">Sells</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                @php
                                $customers = \App\Models\User::count();
                                @endphp
                                <div class="inner">
                                    <h3>{{ $customers }}</h3>
                                    <p> Customers</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p> Delivery</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p> Returns</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <section class="col-lg-6 connectedSortable">

                            <div class="card bg-gradient-success">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>

                                    <div class="card-tools">

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"
                                                data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body pt-0">

                                    <div id="calendar" style="width: 100%"></div>
                                </div>

                            </div>

                           <div class="card bg-gradient-primary">
                                <div class="card-header border-0">
                                    <h3 class="card-title">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        Visitors
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                                            <i class="far fa-calendar-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                                </div>

                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <div id="sparkline-1"></div>
                                            <div class="text-white">Visitors</div>
                                        </div>

                                        <div class="col-4 text-center">
                                            <div id="sparkline-2"></div>
                                            <div class="text-white">Online</div>
                                        </div>

                                        <div class="col-4 text-center">
                                            <div id="sparkline-3"></div>
                                            <div class="text-white">Sales</div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </section>


                        <section class="col-lg-6 connectedSortable">



                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>
                                        Sales
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content p-0">

                                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                </div>
            </section>
        </div>

@endsection
