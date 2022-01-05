@extends('layouts.admin')

@section('content')
    
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Careers</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.career.update', ['id'=>$career->id])}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control" id="fname" name="fname" value="{{$career->fname}}">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{$career->lname}}">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$career->address}}">
              </div>
              <div class="form-group">
                <label for="service">Services</label>
                <select name="service" class="form-select">
                    <option id="1">1</option>
                </select>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" class="form-control" id="phone" name="phone" value="{{$career->phone}}">
              </div>
              <div class="form-group">
                <label for="alt_phone">Alternative Phone Number</label>
                <input type="phone" class="form-control" id="alt_phone" name="alt_phone" value="{{$career->alt_phone}}">
              </div>
              <div class="form-group">
                <label for="document">Documents</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" value="{{$career->document}}" class="custom-file-input" name="document" id="document">
                    <label class="custom-file-label" for="document">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
            <div class="form-group">
              <label for="image">Image input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" value="{{$career->image}}" class="custom-file-input" name="image" id="image">
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
                        Message
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <textarea id="summernote" name="description">
                        {{$career->message}}
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