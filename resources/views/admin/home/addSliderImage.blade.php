@extends('layouts.admin')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="page-header">
      <h3 class="page-title">Add Slider Image</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Slider</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Slider Image</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.slider.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" required name="name" id="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" required name="img" class="form-control">
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.slider')}}" class="btn btn-dark">Cancel</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection