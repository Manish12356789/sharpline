@extends('layouts.user')
@section('content')
 
<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url({{asset('user/images/banner/bnr1.jpg')}});">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Services 1</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Services 1</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full bg-white content-inner">
        <!-- Services  -->
        <div class="container">
            <div class="row ">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('images/service')}}/{{$service->image}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="{{route('service_single', ['id'=>$service->id])}}">{{$service->title}}</a></h4>
                            <p> {{$service->description}}</p>
                            <a href="{{route('service_single', ['id'=>$service->id])}}" class="site-button ">More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('user/images/our-work/pic2.jpg')}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="#">First heading</a></h4>
                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius </p>
                            <a href="#" class="site-button ">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('user/images/our-work/pic3.jpg')}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="#">First heading</a></h4>
                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                            <a href="#" class="site-button ">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('user/images/our-work/pic5.jpg')}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="#">First heading</a></h4>
                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                            <a href="#" class="site-button ">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('user/images/our-work/pic6.jpg')}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="#">First heading</a></h4>
                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius </p>
                            <a href="#" class="site-button ">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                    <div class="box">
                        <div class="media"> <a href="#"><img src="{{asset('user/images/our-work/pic4.jpg')}}" alt=""></a> </div>
                        <div class="info p-a30 border-1">
                            <h4 class="title m-t0"><a href="#">First heading</a></h4>
                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius  </p>
                            <a href="#" class="site-button">More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Services END -->
    </div>
</div>
<!-- Content END-->

@endsection