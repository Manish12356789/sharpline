@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">About Us</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Why Choose</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Why choose Us Content</h4>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('admin.choose.store') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="name">Heading</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="7" name="description"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection