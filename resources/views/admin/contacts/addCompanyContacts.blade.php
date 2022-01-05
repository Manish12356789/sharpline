@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Company Contacts</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">contacts</a></li>
          <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Company Contact Details</h4>
                <form class="form-sample" action="{{ route('admin.companyContact.store') }}" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="email" class="col-form-label">Email</label>
                            <div class="">
                              <input type="email" name="email" id="email" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="phone" class="col-form-label">Phone Number</label>
                            <div class="">
                              <input id="phone" name="phone" type="number" class="form-control" />
                            </div>
                          </div>
                        </div>
                    </div>
                 
                  <p class="card-description"> Address </p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <label for="street" class="col-form-label">Street Name</label>
                        <div class="">
                          <input type="text" name="street" id="street" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label id="district" class="col-form-label">District</label>
                        <div class="">
                          <input type="text" name="district"  id="district" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="postal" class="col-form-label">Postcode</label>
                        <div class="">
                          <input type="number" name="postal" id="postal"  class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-form-label">State</label>
                        <div class="">
                          <input type="text" name="state" id="state" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="country" class="col-form-label">Country</label>
                        <div class="">
                          <input type="text" name="country" id="country" class="form-control" />
                          {{-- <select name="country" id="country" class="form-control">
                            <option value="NPL">Nepal</option>
                            <option value="IND">India</option>
                            <option value="CHN">China</option>
                            <option value="PKT">Pakistan</option>
                          </select> --}}
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