@extends('layouts.admin')

@section('content')
     <!-- /.row -->
     <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Openings</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Services</th>
                    <th>Phone Number</th>
                    <th>Alternative Phone Number</th>
                    <th>Documents</th>
                    <th>Image</th>
                    <th>message</th>
                    <th>Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($careers as $career)      
                  <tr>
                    <td>{{$career->first_name}}</td>
                    <td>{{$career->last_name}}</td>
                    <td>{{$career->address}}</td>
                    <td>{{$career->service}}</td>
                    <td>{{$career->phone}}</td>
                    <td>{{$career->alt_phone}}</td>
                    <td><img src="{{asset('images/career')}}/{{$career->document}}" alt="image"/></td>
                    <td><img src="{{asset('images/career')}}/{{$career->image}}" alt="image"/></td>
                    <td>{{$career->description}}</td>
                    <td>
                        <a href="{{route('admin.career.edit', ['id'=>$career->id])}}" class="btn btn-primary"></a>
                        <a href="{{route('admin.career.destroy', ['id'=>$career->id])}}" class="btn btn-danger"></a>

                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->   
@endsection