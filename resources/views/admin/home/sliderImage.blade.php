@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Home Page Background Image</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Image</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Slider Image</h4>
                    @if($images->count() < 1)
                      <a class="btn btn-primary float-right" href="{{route('admin.slider.add')}}">Add Image</a>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th> Name </th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($images as $image)
                            <tr>
                                <td class="py-1">
                                  <img class="img-fluid" src="{{ asset('images/slider') }}/{{$image->image}}" alt="image" />
                                </td>
                                <td>
                                  {{$image->name}}
                                </td>
                                <td>
                                  <a class="btn btn-primary" href="{{route('admin.slider.edit',['id'=>$image->id])}}">Edit</a>
                                  <a class="btn btn-danger" href="{{route('admin.slider.destroy',['id'=>$image->id])}}">Delete</a>

                                </td>
                              </tr>
                            @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
