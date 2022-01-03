<!-- header -->
<header class="site-header header-style-3 mo-left light">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul class="social-line text-center pull-right d-none d-md-block">
                        <li><a href="javascript:void(0);"><i class="fa fa-phone "></i> <span>+977 1234567890</span> </a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-envelope-o "></i> <span>sharplinenepal@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="social-line text-center pull-right">
                        <li><a href="javascript:void(0);"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin "></i></a></li>
                        <li><a href="javascript:void(0);">Login</a></li>
                        <li><a href="javascript:void(0);">Register</a></li>
                        <li> <a id="quik-search-btn"><i class="fa fa-search "></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header main-bar-wraper header-curve navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="slide-up">
                <div class="container clearfix bg-primary">
                    <!-- website logo -->
                    <div class="logo-header mostion"><a href="{{route('home')}}"><img src="{{asset('user/images/sharpline.png')}}" width="200" height="90" alt=""></a></div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav header3-btn disnone-md">
                        <div class="extra-cell">
                            <a href="{{route('book')}}" class="site-button white skew-secondry">Book Now</a>
                        </div>
                    </div>
                    <!-- extra nav -->
                    <div class="extra-nav"> </div>
                    <!-- Quik search -->
                    <div class="quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class=" nav navbar-nav">
                        <li class="active"> <a href="{{route('home')}}">Home</a>
                        </li>
                        
                        <li>
                            <a href="{{route('services')}}">Services<i class="fa fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="javascript:;">Service 1</a>
                                </li>
                                <li> <a href="javascript:;">Service 2</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Sub Service 1</a></li>
                                    </ul>
                                </li>
                                <li> <a href="javascript:;">Service 3</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('packages')}}">Packages</a></li>
                        <li><a href="{{route('careers')}}">Careers</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li> <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
<!-- header END -->
