@extends('layouts.admin')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Services</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">DataTable with minimal features & hover style</h3> --}}
                        <a class="btn btn-suuccess" href="{{route('admin.service.add')}}">Add New</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Measurement Type</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Description(s)</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->measurement}}</td>
                                    <td><i class="{{$data->icon}}"></i></td>

                                    <td> <img src="{{asset('images/services')}}/{{$data->image}}" alt="">
                                    </td>
                                    <td>{{$data->description}}</td>
                                    <td> 
                                        <a href="{{route(admin.service.edit)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route(admin.service.destroy)}}" class="btn btn-danger">Delete</a>
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
        </div>
    </div>
</section>
@endsection
