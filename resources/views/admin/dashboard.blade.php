@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Bookings</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Bedroom</th>
                                            <th>Bathroom</th>
                                            <th>Frequency</th>
                                            <th>Services</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $bk)
                                        <tr>
                                            <td>{{$bk->id}}</td>
                                            <td>{{$bk->first_name}}  {{$bk->last_name}}</td>
                                            <td>{{$bk->phone}}, {{$bk->alt_number}}</td>
                                            <td>
                                                {{$bk->address}}
                                            </td>
                                            <td>{{$bk->email}}</td>
                                            <td>{{$bk->bedroom}}</td>
                                            <td>{{$bk->bathroom}}</td>
                                            <td>{{$bk->frequency}}</td>
                                            <td>{{$bk->extra}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-2">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Suscribed User</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suscribers as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-10">
                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Services</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                @foreach ($services as $service)
                                <li class="item">
                                    <div class="product-img">
                                       <i class="{{$service->icon}}"></i>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-title">{{$service->title}}
                                            <span class="badge badge-warning float-right">Rs. {{$service->price}}</span></p>
                                        <span class="product-description">
                                            {{$service->description}}
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
