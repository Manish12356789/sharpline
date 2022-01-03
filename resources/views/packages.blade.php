@extends('layouts.user')

@section('content')

    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr overlay-black-middle" style="background-image:url({{asset('user/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">AMC with Sharpline</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.php">Home</a></li>
                    <li>Sharpline AMC</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Pricing table-1 Columns 3 with gap -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h3 class="text-uppercase">AMC Package For Plumbing</h3>
                    </div>
                    <div class="section-content">
                        <div class="pricingtable-row m-b30">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price"> <span class="pricingtable-bx">Rs. 1,450</span> <span class="pricingtable-type">Month</span> </div>
                                            <div class="pricingtable-title">
                                                <h2>Basic package</h2>
                                            </div>
                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> Routine Checkup</li>
                                                <li><i class="fa fa-check"></i> Emergency Visits</li>
                                                <li><i class="fa fa-check"></i> Discounts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner pricingtable-highlight">
                                            <div class="pricingtable-price"> <span class="pricingtable-bx">Rs. 2,450</span> <span class="pricingtable-type">Month</span> </div>
                                            <div class="pricingtable-title">
                                                <h2>Value package</h2>
                                            </div>
                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> Routine Checkup</li>
                                                <li><i class="fa fa-check"></i> Emergency Visits</li>
                                                <li><i class="fa fa-check"></i> Discounts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">
                                            <div class="pricingtable-price"> <span class="pricingtable-bx">Rs. 4,950</span> <span class="pricingtable-type">Month</span> </div>
                                            <div class="pricingtable-title">
                                                <h2>unlimited package</h2>
                                            </div>
                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> Routine Checkup</li>
                                                <li><i class="fa fa-check"></i> Emergency Visits</li>
                                                <li><i class="fa fa-check"></i> Discounts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing table-1 Columns 3 with gap END -->
                <!-- Why Amc -->
        		<div class="section-full content-inner-2 bg-primary">
        			<div class="container">
        				<div class="section-head text-white text-center ">
                            <h2 class="text-uppercase font-30">Why AMC</h2>
        					<div class="separator bg-yellow-l"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                        </div>
        				<div class="row">
        					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
        						<div class="icon-bx-wraper left">
        							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-lifesaver"></i></a> </div>
        							<div class="icon-content">
        								<h4 class="dez-tilte text-white text-uppercase m-t0">Guaranteed Satisfaction</h4>
        								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
        							</div>
        						</div>
        					</div>
        					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
        						<div class="icon-bx-wraper left">
        							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-people"></i></a> </div>
        							<div class="icon-content">
        								<h4 class="dez-tilte text-white text-uppercase m-t0">Expert Technicians</h4>
        								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
        							</div>
        						</div>
        					</div>
        					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
        						<div class="icon-bx-wraper left">
        							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-house"></i></a> </div>
        							<div class="icon-content">
        								<h4 class="dez-tilte text-white text-uppercase m-t0">Home Service Delivery</h4>
        								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
        							</div>
        						</div>
        					</div>
                            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
        						<div class="icon-bx-wraper left">
        							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-house"></i></a> </div>
        							<div class="icon-content">
        								<h4 class="dez-tilte text-white text-uppercase m-t0">Home Service Delivery</h4>
        								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<!-- Why Amc -->
            </div>
            <!-- Left & right section  END -->
        </div>
    </div>
    <!-- Left & right section END -->
<!-- Content END-->

@endsection