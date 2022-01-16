@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Services</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" validate action="{{route('admin.service.update', ['id'=>$data->id])}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" name="price" id="price"
                                            value="{{$data->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="measurement">Measurement</label>
                                        <select name="measurement" aria-selected="{{$data->measurement}}" class="form-select">
                                            <option value="cm">CM</option>
                                            <option value="m">Meter</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="icon">Font Awesome Icon</label>
                                        <input type="text" class="form-control" name="icon" id="icon"
                                            value="{{$data->icon}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img" value="{{$data->image}}" class="custom-file-input" id="img">
                                                <label class="custom-file-label" for="img">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea id="summernote" name="description">
                                        {{$data->description}}
                                      </textarea>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
