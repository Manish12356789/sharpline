@extends('layouts.admin')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="page-header">
      <h3 class="page-title">About Us</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Why Choose</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Why choose Us Content</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.choose.update', ['id'=>$choose->id]) }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Heading</label>
                    <input type="text" class="form-control" id="name" value="{{$choose->name}}" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="7" name="description">{{$choose->name}}</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <a href="{{route('admin.choose')}}" class="btn btn-dark">Cancel</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection