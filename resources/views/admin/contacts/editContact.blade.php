@extends('layouts.admin')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="page-header">
      <h3 class="page-title"> Contact Messages</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">contact</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Edit Contact Message Details</h4>
                <form class="form-sample" action="{{ route('admin.contact.update', ['id'=>$contact->id]) }}" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="name" class="col-form-label">Full Name</label>
                            <div class="">
                              <input type="text" name="name" id="name" value="{{$contact->name}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="email" class="col-form-label">Email</label>
                            <div class="">
                              <input id="email" name="email" type="email" value="{{$contact->phone}}" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                 
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label for="subject" class="col-form-label">Subject</label>
                        <div class="">
                          <input type="text" name="subject" id="subject" value="{{$contact->subject}}" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label id="message" class="col-form-label">Messgae</label>
                        <div class="">
                          <textarea name="message" value="{{$contacts->message}}"  id="message" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  <a href="{{route('admin.contact')}}" class="btn btn-dark">Cancel</button>

                </form>
              </div>
            </div>
          </div>
    </div>
{{-- </div> --}}
@endsection