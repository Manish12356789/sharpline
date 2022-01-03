@extends('layouts.user')

@section('content')

<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url({{asset('user/images/banner/bnr1.jpg')}});">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">About Us</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact -->
    <div class="clearfix">
        <!-- About Company -->
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 text-center d-lg-block d-sm-none d-md-none">
                        <div class="worker"> <img src="{{asset('user/images/pic1.png')}}" alt=""/> </div>
                    </div>
                    <div class="col-lg-7 col-md-12 m-b30">
                        <h2 class="font-35 m-t10 m-b0">We Provide Best Help for Your Home</h2>
                        <h3 class="m-t10">Professional Cleaning Services for Home and Office</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic..</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper left">
                                    <div class="icon-lg"> <a href="#" class="icon-cell"><i class="glyph-icon flaticon-house"></i></a> </div>
                                    <div class="icon-content">
                                        <h4 class="tilte">Office Cleaning</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper left">
                                    <div class="icon-lg"> <a href="#" class="icon-cell"><i class="glyph-icon flaticon-dustpan"></i></a> </div>
                                    <div class="icon-content">
                                        <h4 class="tilte">Apartment Cleaning</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper left">
                                    <div class="icon-lg"> <a href="#" class="icon-cell"><i class="glyph-icon flaticon-vacuum-cleaner"></i></a> </div>
                                    <div class="icon-content">
                                        <h4 class="tilte">Move in/Out Service</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper left">
                                    <div class="icon-lg"> <a href="#" class="icon-cell"><i class="glyph-icon flaticon-car"></i></a> </div>
                                    <div class="icon-content">
                                        <h4 class="tilte">Car Washing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Company Stats  -->
        <div class="section-full bg-img-fix content-inner overlay-black-dark our-projects-galery" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center text-white m-b20">
                            <div class="icon-content">
                                <h2 class="tilte text-uppercase h2"> <span class="counter">5000</span> + </h2>
                                <h6>Passionate Employee</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center text-white  m-b20">
                            <div class="icon-content">
                                <h2 class="tilte text-uppercase h2"> <span class="counter">700</span> + </h2>
                                <h6>Modern Factory </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center text-white m-b20">
                            <div class="icon-content">
                                <h2 class="tilte text-uppercase h2"> <span class="counter">245</span> + </h2>
                                <h6>Factory in Worldwide</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper center text-white m-b20">
                            <div class="icon-content">
                                <h2 class="tilte text-uppercase h2"> <span class="counter">648</span> + </h2>
                                <h6>International Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company Stats END -->
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h3 class="h3">Meet our Dedicate Team</h3>
                    <div class="separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-6 m-b30">
                            <div class="box">
                                <div class="media"> <a href="#"><img src="{{asset('user/images/our-team/pic1.jpg')}}')}}" alt=""></a> </div>
                                <div class="info p-a20 p-t40 border-1">
                                    <h4 class="title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 m-b30">
                            <div class="box">
                                <div class="media"> <a href="#"><img src="{{asset('user/images/our-team/pic2.jpg')}}" alt=""></a> </div>
                                <div class="info p-a20 p-t40 border-1">
                                    <h4 class="title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 m-b10">
                            <div class="box">
                                <div class="media"> <a href="#"><img src="{{asset('user/images/our-team/pic3.jpg')}}" alt=""></a> </div>
                                <div class="info p-a20 p-t40 border-1">
                                    <h4 class="title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                    <div class="bg-primary skew-content-box">
                                        <ul class="social-icon">
                                            <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                            <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                        </ul>
                                    </div>
                                    <span>Senor Vice President</span>
                                    <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member -->
        <!-- What peolpe are saying -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url({{asset('user/images/background/bg2.jpg')}});">
            <div class="container">
                <div class="section-head text-center text-white">
                    <h3 class="h3">Our Testimonials</h3>
                    <div class="separator-outer ">
                        <div class="separator bg-primary style-liner"></div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content">
                    <div class="testimonial-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make </p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{asset('user/images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make </p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{asset('user/images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make </p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-pic quote-left radius shadow"><img src="{{asset('user/images/testimonials/pic1.jpg')}}" width="100" height="100" alt=""></div>
                                    <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What peolpe are saying END-->
    </div>
    <!-- contact area  END -->
</div>
<!-- Content END-->

@endsection