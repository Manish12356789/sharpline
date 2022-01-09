@extends('layouts.user')

@section('content')
    <!-- Content -->
    <div class="page-content">
		<!-- Slider -->
        <div class="main-slider style-two default-banner" id="home">
            <div class="tp-banner-container">
                <div class="tp-banner">
					<div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
						<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
						<div id="rev_slider_1175_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
							<ul>	<!-- SLIDE  -->
								@foreach ($sliders as $slider)
								<li data-index="rs-3239" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide7.jpg')}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{asset('images/slider')}}/{{$slider->image}}"  alt=""  data-lazyload="{{asset('images/slider')}}/{{$slider->image}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-2"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']"
									data-width="full" data-height="full"
									data-whitespace="nowrap"
									data-type="shape"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textAlign="['left','left','left','left']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 2;border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
									<!-- LAYER NR. 4 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										id="slide-3240-layer-1"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']"
										data-fontsize="['60','60','40','20']"
										data-lineheight="['70','70','50','30']"
										data-width="['720','640','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 8; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: bold; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;letter-spacing:10px;">BEST SERVICE<br/>
							 PROVIDE</div>
								</li>
								@endforeach

								<!-- SLIDE  -->
								{{-- <li data-index="rs-3240" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide5.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{asset('user/images/main-slider/slide6.jpg')}}"  alt=""  data-lazyload="images/main-slider/slide6.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 2;border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   rs-parallaxlevel-4" id="slide-3240-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-70','-70','-70','-100']" data-fontsize="['60','60','40','20']" data-lineheight="['70','70','50','30']" data-width="['720','640','480','300']" data-height="none" data-whitespace="normal"
                                    data-type="text" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: bold; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;letter-spacing:10px;">
                                    BEST SERVICE<br />
                                    PROVIDE</div>
								</li> --}}
								<!-- SLIDE  -->
							</ul>
							<div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>
						</div>
					</div>
                    <div class="searchbar">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="" value="" class="form-control" placeholder="Search">
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="">
                                    <option value="">Kathmandu</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" name="" class="form-control site-button white skew-secondry">Search</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- Slider END -->
		<!-- About Info -->
		<div class="section-full bg-white abouts-info content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 m-b30 ">
						<div class="icon-bx-wraper bg-white clearfix p-a25 left">
							<div class="icon-bx-sm bg-primary radius"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
							<div class="icon-content">
								<h4 class="dez-tilte  text-uppercase"><a href="#">Find the Nearest Office</a></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12  m-b30 ">
						<div class="icon-bx-wraper bg-white clearfix p-a25 left">
							<div class="icon-bx-sm bg-primary radius"> <a href="estimate.php" class="icon-cell"><i class="fa fa-envelope-o"></i></a> </div>
							<div class="icon-content">
								<h4 class="dez-tilte  text-uppercase"><a href="estimate.php">Request an estimate</a></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 text-center ">
						<h2 class="text-uppercase font-weight-700 font-40 m-b15">Call Us: +977 1234567890</h2>
						<h4 class="text-uppercase font-weight-400">for your instant estimate</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- About Info -->
		<!-- Our Services -->
		<div class="section-full bg-gray ser-blog content-inner">
			<div class="container">
				<div class="section-head text-center ">
                    <h2 class="text-uppercase font-30">Our Services</h2>
					<div class="separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				<div class="row">
					@foreach ($services as $service)
					<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('images/service')}}/{{$service->image}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="{{route('service_single', ['id'=>$service->id])}}" class="text-white">{{$service->title}}</a></h4>
								</div>
							</div>
						</div>
					</div>
					@endforeach

					{{-- <div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('user/images/sharpline/demolition.jpg')}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="#" class="text-white">Demolition/Repair</a></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('user/images/sharpline/design.jpg')}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="#" class="text-white">Design</a></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('user/images/sharpline/construction.jpg')}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="#" class="text-white">Construction</a></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('user/images/sharpline/supply.jpg')}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="#" class="text-white">Supply</a></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 m-b30">
						<div class="text-center center bg-white">
							<div class="services-blog">
								<img src="{{asset('user/images/sharpline/consultant.jpg')}}" alt="">
								<div class="icon-content">
									<h4 class="tilte m-a0 text-uppercase"><a href="#" class="text-white">Consultant</a></h4>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	    <!-- Our Services END-->
        <!-- How We Work -->
            <div class="section-full bg-white ser-blog content-inner">
    			<div class="container">
    				<div class="section-head text-center ">
                        <h2 class="text-uppercase font-30">How We Work</h2>
    					<div class="separator bg-primary"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
    				<div class="block-step">
                        <div class="row">
                            <div class="col-md-5 text-md-right text-center">
                                <div class="title-step">
                                    <h3>Describe the service</h3>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="{{asset('user/images/phone_call.svg')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <p class="p-3">Choose from a variety of services and select the day and time you'd like a qualified expert to show up. Give us the details and we'll find you the help.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-step">
                        <div class="row">
                            <div class="col-md-5 text-md-right text-center">
                                <div class="title-step">
                                    <h3>Get Matched</h3>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="{{asset('user/images/house_searching.svg')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <p class="p-3">Sharpline Solutions will match you with the right professional according to your requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-step">
                        <div class="row">
                            <div class="col-md-5 text-md-right text-center">
                                <div class="title-step">
                                    <h3>Get It Done</h3>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="{{asset('user/images/transfer_money.svg')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <p class="p-3">Just like that, our expert arrives and gets the job done. Pay after work completion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block-step">
                        <div class="row">
                            <div class="col-md-5 text-md-right text-center">
                                <div class="title-step">
                                    <h3>Sit back and relax</h3>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="{{asset('user/images/chilling.svg')}}" alt="">
                            </div>
                            <div class="col-md-5">
                                <p class="p-3">30 days service warranty ensures your happiness and peace of mind.</p>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
        <!-- How We Work -->

		<!-- Why Us -->
		<div class="section-full content-inner-2 bg-primary">
			<div class="container">
				<div class="section-head text-white text-center ">
                    <h2 class="text-uppercase font-30">Why Us</h2>
					<div class="separator bg-yellow-l"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper left">
							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-lifesaver"></i></a> </div>
							<div class="icon-content">
								<h4 class="dez-tilte text-white text-uppercase m-t0">Guaranteed Satisfaction</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper left">
							<div class="icon-bx-sm text-yellow-l radius border-2"> <a href="#" class="icon-cell text-yellow-l"><i class="flaticon-people"></i></a> </div>
							<div class="icon-content">
								<h4 class="dez-tilte text-white text-uppercase m-t0">Expert Technicians</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-b30">
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
		<!-- Why Us -->
		<!-- Recent Blog -->
		<div class="section-full rec-blog bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase font-30">Recent Blog</h2>
					<div class="separator bg-primary"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content ">
                    <div class="blog-carousel owl-carousel owl-btn-center-lr">
						@foreach ($blogs as $blog)	
                        <div class="item">
							<div class="box">
								<div class="media">
									<a href="#"><img src="{{asset('images/blog')}}/{{$blog->image}}" alt=""></a>
								</div>
								<div class="info p-tb20">
									<ul class="blog-info text-primary">
										<li>By <a href="#" title="Posts by demongo" rel="author">{{AUTH::$user->name}}</a> </li>
										<li><a href="#" class="comments-link">1 Comment</a> </li>
										<li><span>{{$blog->created_at}}</span> </li>
									</ul>
									<h4 class="title m-t0"><a href="#">{{$blog->description}} </a></h4>
								</div>
							</div>
						</div>
						@endforeach

						{{-- <div class="item">
							<div class="box">
								<div class="media">
									<a href="#"><img src="{{asset('user/images/blog/latest-blog/pic2.jpg')}}" alt=""></a>
								</div>
								<div class="info p-tb20">
									<ul class="blog-info text-primary">
										<li>By <a href="#" title="Posts by demongo" rel="author">demongo</a> </li>
										<li><a href="#" class="comments-link">1 Comment</a> </li>
										<li><span>17 Mar 2016</span> </li>
									</ul>
									<h4 class="title m-t0"><a href="#">How To Build A Cleaning Plan</a></h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="box">
								<div class="media">
									<a href="#"><img src="{{asset('user/images/blog/latest-blog/pic3.jpg')}}" alt=""></a>
								</div>
								<div class="info p-tb20">
									<ul class="blog-info text-primary">
										<li>By <a href="#" title="Posts by demongo" rel="author">demongo</a> </li>
										<li><a href="#" class="comments-link">1 Comment</a> </li>
										<li><span>17 Mar 2016</span> </li>
									</ul>
									<h4 class="title m-t0"><a href="#">Earn landscaping Award</a></h4>
								</div>
							</div>
						</div> --}}
                    </div>
                </div>
            </div>
        </div>
		<!-- Recent Blog -->
        		<!-- Testimonials -->
		<div class="section-full bg-white bg-img-fix p-t70 p-b70">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="text-uppercase font-30">Client testimonials</h2>
					<div class="separator bg-primary"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
				<div class="section-content">
					<div class="testimonial-two owl-carousel owl-btn-center-lr">
						@foreach ($testimonials as $testimonial)
						<div class="item">
							<div class="testimonial-2">
								<div class="testimonial-text bg-primary">
									<p>{{$testimonial->text}}</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic quote-left radius shadow"><img src="{{asset('images/testimonial')}}/{{$testimonial->image}}" width="100" height="100" alt=""></div>
									<strong class="testimonial-name">{{$testimonial->name}}</strong> <span class="testimonial-position">{{$testimonial->position}}</span> </div>
							</div>
						</div>
						@endforeach

						{{-- <div class="item">
							<div class="testimonial-2">
								<div class="testimonial-text bg-primary">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic quote-left radius shadow"><img src="{{asset('https://via.placeholder.com/100x100.png')}}" width="100" height="100" alt=""></div>
									<strong class="testimonial-name">Satish Nepal</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-2">
								<div class="testimonial-text bg-primary">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
								</div>
								<div class="testimonial-detail clearfix">
									<div class="testimonial-pic quote-left radius shadow"><img src="{{asset('https://via.placeholder.com/100x100.png')}}" width="100" height="100" alt=""></div>
									<strong class="testimonial-name">Satish Nepal</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials -->
    </div>
    <!-- Content END-->
@endsection