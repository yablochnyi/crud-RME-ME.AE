@extends('admin.product.layouts')
@section('admin.content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
            {{--                <div class="row">--}}
            {{--                    <div class="col-lg-3 col-6">--}}
            {{--                        <!-- small box -->--}}
            {{--                        <div class="small-box bg-info">--}}
            {{--                            <div class="inner">--}}
            {{--                                <h3>150</h3>--}}

            {{--                                <p>New Orders</p>--}}
            {{--                            </div>--}}
            {{--                            <div class="icon">--}}
            {{--                                <i class="ion ion-bag"></i>--}}
            {{--                            </div>--}}
            {{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- ./col -->--}}
            {{--                    <div class="col-lg-3 col-6">--}}
            {{--                        <!-- small box -->--}}
            {{--                        <div class="small-box bg-success">--}}
            {{--                            <div class="inner">--}}
            {{--                                <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

            {{--                                <p>Bounce Rate</p>--}}
            {{--                            </div>--}}
            {{--                            <div class="icon">--}}
            {{--                                <i class="ion ion-stats-bars"></i>--}}
            {{--                            </div>--}}
            {{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- ./col -->--}}
            {{--                    <div class="col-lg-3 col-6">--}}
            {{--                        <!-- small box -->--}}
            {{--                        <div class="small-box bg-warning">--}}
            {{--                            <div class="inner">--}}
            {{--                                <h3>44</h3>--}}

            {{--                                <p>User Registrations</p>--}}
            {{--                            </div>--}}
            {{--                            <div class="icon">--}}
            {{--                                <i class="ion ion-person-add"></i>--}}
            {{--                            </div>--}}
            {{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- ./col -->--}}
            {{--                    <div class="col-lg-3 col-6">--}}
            {{--                        <!-- small box -->--}}
            {{--                        <div class="small-box bg-danger">--}}
            {{--                            <div class="inner">--}}
            {{--                                <h3>65</h3>--}}

            {{--                                <p>Unique Visitors</p>--}}
            {{--                            </div>--}}
            {{--                            <div class="icon">--}}
            {{--                                <i class="ion ion-pie-graph"></i>--}}
            {{--                            </div>--}}
            {{--                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- ./col -->--}}
            {{--                </div>--}}
            <!-- /.row -->

                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">PrestaShop</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-7">
                                    <div class="btn-group w-10 float-right">
                                        <form method="post" action="{{ route('add.all.prestashop') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-app bg-success">
                                                <i class="fas fa-plus-circle"></i> Add all products
                                            </button>
                                        </form>
                                        <a class="btn btn-app bg-danger"
                                           href="{{ route('update.all.price.prestashop') }}">
                                            <i class="fas fa-dollar-sign"></i> Update all prices
                                        </a>
                                        <a class="btn btn-app bg-warning"
                                           href="{{ route('update.all.quantity.prestashop') }}">
                                            <i class="fas fa-layer-group"></i> Update all quantity
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <!-- Main row -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List products RME</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable-crud"
                                       class="table table-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                    <tr>
                                        <th>Action App-CRUD-RME</th>
                                        <th>Item code</th>
                                        <th>Product number</th>
                                        <th>Product name</th>
                                        <th>Category</th>
                                        <th>Unit</th>
                                        <th>Quantity</th>
                                        <th>Price AED</th>
                                        <th width="200px">Action PrestaShop</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- right col -->
    </div>
@endsection

