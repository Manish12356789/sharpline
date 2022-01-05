@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Orders</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Order</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Order Details</h4>
                <form class="form-sample" action="{{ route('admin.order.update', ['id'=>$order->id]) }}" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="name" class="col-form-label">Full Name</label>
                            <div class="">
                              <input type="text" name="name" id="name" value="{{$order->full_name}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="email" class="col-form-label">Email</label>
                            <div class="">
                              <input id="email" name="email" type="email" value="{{$order->phone}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label for="phone" class="col-form-label">Phone Number</label>
                              <div class="">
                                <input id="phone" name="phone" type="number" value="{{$order->phone}}" class="form-control" />
                              </div>
                            </div>
                          </div>
                    </div>
                 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label for="menu" class="col-form-label">Edit Food</label>
                        <div class="">
                          <input type="text" name="menu" id="menu" value="{{$order->menu_type}}" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label id="message" class="col-form-label">Messgae</label>
                        <div class="">
                          <textarea name="address" value="{{$order->address}}"  id="address" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection