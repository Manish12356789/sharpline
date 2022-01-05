@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> About Us </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Why Choose Us</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.choose.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Heading </th>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($chooses as $choose)
                            <tr>
                               
                                <td> {{$choose->title}} </td>
                                <td>{{$choose->description}}</td>
                                <td>
                                  <a href="{{route('admin.choose.edit', ['id'=>$choose->id])}}" class="btn btn-primary">Edit</a>
                                  <a href="{{route('admin.choose.destroy', ['id'=>$choose->id])}}" class="btn btn-danger">Delete</a>
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
