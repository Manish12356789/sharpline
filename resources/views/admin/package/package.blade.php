@extends('layouts.admin')

@section('content')
     <!-- /.row -->
     <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Packages</h3>
              <a class="btn btn-success" href="{{route('admin.package.add')}}">Add Package</a>

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
                    <th>Title</th>
                    <th>price</th>
                    <th>Time</th>
                    <th>Description</th>
                    <th>Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)      
                  <tr>
                    <td>{{$package->title}}</td>
                    <td>{{$package->price}}</td>
                    <td>{{$package->time}}</td>
                    <td>{{$package->description}}</td>
                    <td>
                        <a href="{{route('admin.package.edit', ['id'=>$package->id])}}" class="btn btn-primary"></a>
                        <a href="{{route('admin.package.destroy', ['id'=>$package->id])}}" class="btn btn-danger"></a>

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