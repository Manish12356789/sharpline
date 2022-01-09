@extends('layouts.user')

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url({{asset('user/images/banner/bnr1.jpg')}});">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Career</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Career</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full content-inner bg-white">
        <!-- Career -->
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-9 col-md-8 m-b30">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-form">
                                <h3 class="form-head">Become A Professional</h3>
                                <div class="new-address-block">
                                    <form method="POST" action="{{route('career.save')}}">
                                    <div class="row">
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                          <input  value="" class="form-control" placeholder="First Name" type="text">
                                       </div>
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                            <input  value="" class="form-control" placeholder="Last Name" type="text">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-8 col-md-8 col-sm-6">
                                          <input placeholder="Address" class="form-control"  value="" type="text">
                                       </div>
                                       <div class="form-group col-lg-4 col-md-4 col-sm-6">
                                          <select class="" name="">
                                              <option value="service">Services:</option>
                                              <option value="electrical">Electrical</option>
                                              <option value="plumbing">Plumbing</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                          <input  value="" class="form-control" placeholder="Phone" type="text">
                                       </div>
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                          <input  value="" class="form-control" placeholder="Alternative Number" type="text">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                           <label for="">Upload Documents</label>
                                          <input  value="" name="docs[]" class="form-control" placeholder="" type="file" multiple>
                                       </div>
                                       <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                           <label for="">Upload Photo</label>
                                          <input  value="" class="form-control" placeholder="" type="file">
                                       </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <textarea name="name" rows="8" cols="80" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <button class="site-button button-3d blue m-r15" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="m-b20 m-t0">Openings </h1>
                    <div class="separator bg-primary"></div>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the  when an unknown printer took a galley of type and scrambled it to make a
                        type specimen book. </strong></p>
                    <h2 class="m-t30 m-b10 ">Cleaning Services</h2>
                    <ul class="list-angle-right">
                        <li><strong>Work Status:</strong> Full time</li>
                        <li><strong>Qualifications:</strong> MSc</li>
                        <li><strong>Experience:</strong> 1-3 Years</li>
                        <li><strong>Location:</strong> UK </li>
                    </ul>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <h3>Our Offerings</h3>
                    <ul class="list-check-circle primary">
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>
                        <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                        <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>
                        <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>
                    </ul>
                    <a href="#" class="site-button "><span>Apply Now</span><i class="fa fa-angle-right m-l10"></i></a>
                    <h2 class="m-t30 m-b10 ">Cleaning Help</h2>
                    <ul class="list-angle-right">
                        <li><strong>Work Status:</strong> Full time</li>
                        <li><strong>Qualifications:</strong> MSc</li>
                        <li><strong>Experience:</strong> 1-3 Years</li>
                        <li><strong>Location:</strong> UK </li>
                    </ul>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the  when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the  when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. </p>
                    <h3>Our Offerings</h3>
                    <ul class="list-check-circle primary">
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>
                        <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                        <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy book. </li>
                        <li>Eorem ipsum dolor sit amete printing and typesetting industry. </li>
                    </ul>
                    <a href="#" class="site-button "><span>Apply Now</span><i class="fa fa-angle-right m-l10"></i></a> </div>
                <!-- Left part start END -->
                <!-- Right part start -->
                <div class="col-lg-3 col-md-4 m-b30">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                                <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="tilte text-uppercase">Recent Highlights</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                                <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building-o"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="tilte text-uppercase">Recent Highlights</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="icon-bx-wraper bx-style-1 p-a20 left">
                                <div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell"><i class="fa fa-code"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="tilte text-uppercase">Content title</h5>
                                    <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right part start END -->
            </div>
        </div>
        <!-- Career END -->
    </div>
</div>
<!-- Content END-->

@endsection