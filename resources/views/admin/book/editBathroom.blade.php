@extends('layouts.admin')

@section('content')
    
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Bathroom </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('admin.book.bathroom.update', ['id'=>$bathroom->id])}}">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="limit">Limit</label>
              <input type="number" class="form-control" id="limit" name="limit" value="{{$bathroom->limit}}">
            </div>
            <div class="form-group">
                <label for="rate">Rate (per one room)</label>
                <input type="number" class="form-control" id="rate" name="rate" {{$bathroom->rate}}>
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