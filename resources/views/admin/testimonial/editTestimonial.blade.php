@extends('layouts.admin')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="page-header">
      <h3 class="page-title">Add New Testimonial</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Testimonial</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.testimonial.update', ['id'=>$testmonial->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input name="name" id="name" class="form-control" value="{{$testimonial->name}}">
                  </div>
                  <div class="form-group">
                      <label for="position">Position</label>
                      <input name="position" id="position" class="form-control" value="{{$testimonial->position}}">
                  </div>
                  <div class="form-group">
                      <label for="text">Text</label>
                      <textarea name="text" rows="9" id="text" class="form-control" value="{{$testimonial->text}}"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="mb-5">
                        <img height="100" width="100" src="{{asset('images/testimonial')}}/{{$testimonial->image}}" alt="avatar" class="img-fuild">
                    </div>
                    <label>Upload New Avatar</label>
                    <input type="file" name="img" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.testimonial')}}" class="btn btn-dark">Cancel</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection