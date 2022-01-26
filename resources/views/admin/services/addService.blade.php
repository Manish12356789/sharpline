@extends('layouts.admin')

@section('content')

    {{-- <div class="content-wrapper"> --}}
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
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
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Service Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" name="price" id="price"
                                            placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="measurement">Measurement</label>
                                        <select name="measurement" class="form-select">
                                            <option value="cm">CM</option>
                                            <option value="m">Meter</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="icon">Font Awesome Icon</label>
                                        <input type="text" class="form-control" name="icon" id="icon"
                                            placeholder="Icon">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">File input</label>
                                        {{-- <input type="file" name="img" class="custom-file-input" id="img"> --}}
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="img" class="custom-file-input" id="img">
                                                <label class="custom-file-label" for="img">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea id="editor1" name="description">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
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
            {{-- </div> --}}
        </section>


@endsection


@section('js')
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endsection