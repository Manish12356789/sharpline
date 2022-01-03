@extends('layouts.user')

@section('content')

<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">{{$service->title}}</h1>
                <div class="separator bg-primary"></div>
                <p class="text-white max-w800 m-auto m-b50">{{$service->description}}</p>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>{{$service->title}}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="section-full bg-white content-inner">
        <!-- About Company -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget_services style-2 m-b40">
                        <ul>
                            <li><a href="all-service.php">ALL SERVICES</a> </li>
                            @foreach ($all_services as $service)
                            <li class=""><a href="{{route('service_single', ['id'=>$service->id])}}">{{$service->title}}</a>  </li>
                            @endforeach
                            {{-- <li class="active"><a href="house-cleaning.php">HOUSE CLEANING</a>  </li>
                            <li><a href="move-in-move-out.php">MOVE IN / MOVE OUT</a>  </li>
                            <li><a href="carpet-cleaning.php">CARPET CLEANING</a>  </li>
                            <li><a href="after-renovation.php">AFTER RENOVATION</a> </li>
                            <li><a href="curtain-cleaning.php">CURTAIN CLEANING</a> </li>
                            <li><a href="window-cleaning.php">WINDOW CLEANING</a> </li> --}}
                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Get your brochures</h4>
                        <div class="download-file">
                            <ul>
                                <li>
                                    <a href="files/pdf-sample.pdf" target="_blank">
                                        <span><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="file-name">Company Brochures</strong>
                                        <i class="fa fa-download"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="files/pdf-sample.pdf" target="_blank">
                                        <span><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="file-name">Company Info</strong>
                                        <i class="fa fa-download"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget  widget_getintuch">
                        <h4 class="widget-title">Contact us</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                            <li><i class="fa fa-phone"></i><strong>phone</strong>0800-123456 (24/7 Support Line)<br>
                                + (20) 1234 0078 (Fax)</li>
                            <li><i class="fa fa-envelope"></i><strong>email</strong>info@demo.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="box">
                                <div class="media m-b30 p-b5"> <a href="#"><img src="images/our-services/img8.jpg" alt=""></a></div>
                                <div class="media"> <a href="#"><img src="images/our-services/img9.jpg" alt=""></a></div>
                                <div class="info m-t30 ">
                                    <h4 class="title m-t0"><a href="#">From Start To finish</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="box">
                                <div class="media"> <a href="#"><img src="images/our-services/img7.jpg" alt=""></a> </div>
                                <div class="info m-t30">
                                    <h4 class="title m-t0"><a href="#">The Initial Planning </a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- About Company END -->
        </div>
    <!-- contact area  END -->
    </div>
<!-- Content END-->

@endsection