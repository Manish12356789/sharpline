@extends('layouts.admin')

@section('content')
    
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Bedroom </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.book.bedroom.update', ['id'=>$bedroom->id])}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="limit">Limit</label>
              <input type="number" class="form-control" id="limit" name="limit" value="{{$bedroom->limit}}">
            </div>
            <div class="form-group">
                <label for="rate">Rate (per one room)</label>
                <input type="number" class="form-control" id="rate" name="rate" {{$bedroom->rate}}>
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