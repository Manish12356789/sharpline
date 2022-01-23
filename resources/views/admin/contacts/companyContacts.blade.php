@extends('layouts.admin')

@section('content')
{{-- <div class="content-wrapper"> --}}
    <div class="page-header">
      <h3 class="page-title">Company Contacts</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Company</a></li>
          <li class="breadcrumb-item active" aria-current="page">contacts</li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Company Contact Details</h4>
                @if ($contacts->count() < 1)
                <a class="btn btn-success" href="{{route('admin.companyContact.add')}}">Add New </a>
                @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Country</th>
                        <th>State</th>
                        <th>District</th>
                        <th>Postal Code</th>
                        <th>Street Name</th>
                        <th>Email </th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$contact->country}}</td>
                                <td>{{$contact->state}}</td>
                                <td>{{$contact->district}}</td>
                                <td>{{$contact->postal}}</td>
                                <td>{{$contact->street}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone}}</td>
                                <td><a class="btn btn-primary" href="{{route('admin.companyContacts.edit')}}">Edit</a>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
{{-- </div> --}}

@endsection
