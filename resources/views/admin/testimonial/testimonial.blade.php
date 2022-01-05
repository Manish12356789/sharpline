@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> What Consumer's Say? </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
        </ol>
      </nav>
    </div>
    <div class="row">
         <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Consumer Testimonial</h4>
                    <a class="btn btn-primary float-right" href="{{route('admin.testimonial.add')}}">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Image </th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonial as $testimonial)
                            <tr>
                                <td class="py-1">
                                  <img src="{{ asset('images/testimonial') }}/{{$testimonial->image}}" alt="image" />
                                </td>
                                <td>{{$testimonial->text}}</td>
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
