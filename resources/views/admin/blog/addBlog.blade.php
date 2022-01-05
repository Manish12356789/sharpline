@extends('layouts.admin')

@section('content')
    
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Blogs</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.blog.store')}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title">
            </div>
            <div class="form-group">
              <label for="image">Image input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Description
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="description">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                    </div>
                    <div class="card-footer">
                      {{-- Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin. --}}
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>

@endsection