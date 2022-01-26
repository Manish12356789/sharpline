@extends('layouts.user')

@section('content')

     <!-- Content -->
     <div class="page-content">
        <!-- inner page banner -->
        <div class="bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="bnr-inr-entry">
                    <h1 class="text-white">{{$blog->title}}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Blog Title</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-9 col-md-7 col-sm-12 m-b30">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                            <div class="post-title ">
                                <h3 class="post-title"><a href="#">Cleaning Team Is... post</a></h3>
                            </div>
                            <div class="post-meta m-b20">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong><span>{{$blog->created_at}}</span> </li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">By Admin</a> </li>
                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                </ul>
                            </div>
                            <div class="post-media img-effect zoom-slow"> <a href="#"><img src="{{asset('images/blog')}}/{{$blog->image}}" alt=""></a> </div>
                            <div class="post-text">
                                {{$blog->content}}
                                {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy
                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum
                                    is simply dummy text of the printing and typesetting  printer a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen  It has urvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since
                                    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                                    It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                                <h5>Completely Responsive</h5>
                                <img class="alignleft" width="300" src="images/blog/grid/pic4.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the releasefive centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the release</p>
                                <div class="divider bg-gray-dark"></div>
                                <img class="alignright" width="300" src="images/blog/grid/pic1.jpg" alt="">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                    type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the release</p> --}}
                            </div>
                            <div class="post-tags-box clear">
                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                            </div>
                        </div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
								<div class="dlab-divider bg-gray-dark"></div>
								<div class="share-details-btn">
									<ul>
										<li><h5 class="m-a0">Share Post</h5></li>
										<li><a href="#" class="site-button facebook button-sm">
											<i class="fa fa-facebook"></i> Facebook</a></li>
										<li><a href="#" class="site-button google-plus button-sm">
											<i class="fa fa-google-plus"></i> Google Plus</a></li>
										<li><a href="#" class="site-button linkedin button-sm">
											<i class="fa fa-linkedin"></i> Linkedin</a></li>
										<li><a href="#" class="site-button instagram button-sm">
											<i class="fa fa-instagram"></i> Instagram</a></li>
										<li><a href="#" class="site-button twitter button-sm">
											<i class="fa fa-twitter"></i> Twitter</a></li>
										<li><a href="#" class="site-button whatsapp button-sm">
											<i class="fa fa-whatsapp"></i> Whatsapp</a></li>
									</ul>
								</div>
                                <h2 class="comments-title">8 Comments</h2>
                                <div class="p-a30 bg-white">
                                    <!-- comment list END -->
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur adipiscing elit.
                                                    Nam vitae neque vitae sapien malesuada aliquet. </p>
                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                            <ol class="children">
                                                <li class="comment odd parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                        <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.
                                                            In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis,
                                                            ac elementum ligula blandit ac.</p>
                                                        <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                                    </div>
                                                    <ol class="children">
                                                        <li class="comment odd parent">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                                <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.
                                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis,
                                                                    ac elementum ligula blandit ac.</p>
                                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                    <!-- list END -->
                                                </li>
                                            </ol>
                                            <!-- list END -->
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic1.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis,
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic2.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis,
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  class="avatar photo" src="images/testimonials/pic3.jpg" alt=""> <cite class="fn">Stacy poe</cite> <span class="says">says:</span> </div>
                                                <div class="comment-meta"> <a href="#">October 6, 2015 at 7:15 am</a> </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet.
                                                    In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. Sed vestibulum sem felis,
                                                    ac elementum ligula blandit ac.</p>
                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <!-- comment list END -->
                                    <!-- Form -->
                                    <div class="comment-respond" id="respond">
                                        <h3 class="comment-reply-title" id="reply-title">Leave a Reply <small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h3>
                                        <form class="comment-form" id="commentform" method="post" action="http://sedatelab.com/developer/donate/wp-comments-post.php">
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" value="Author" name="Author"  placeholder="Author" id="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="text" value="email" placeholder="Email" name="email" id="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="url">Website</label>
                                                <input type="text"  value="url"  placeholder="Website"  name="url" id="url">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                    <!-- Form -->
                                </div>
                            </div>
                        </div>
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <aside  class="side-bar">
                            <div class="widget">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span> </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="post-media"> <img src="images/blog/recent-blog/pic1.jpg" width="200" height="143" alt=""> </div>
                                        <div class="post-info">
                                            <div class="post-header">
                                                <h6 class="post-title"><a href="#">Cleaning Team Is... post entry</a></h6>
                                            </div>
                                            <div class="post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="post-media"> <img src="images/blog/recent-blog/pic2.jpg" width="200" height="160" alt=""> </div>
                                        <div class="post-info">
                                            <div class="post-header">
                                                <h6 class="post-title"><a href="#">Cleaning Team Is... post entry</a></h6>
                                            </div>
                                            <div class="post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="post-media"> <img src="images/blog/recent-blog/pic3.jpg" width="200" height="160" alt=""> </div>
                                        <div class="post-info">
                                            <div class="post-header">
                                                <h6 class="post-title"><a href="#">Cleaning Team Is... post entry</a></h6>
                                            </div>
                                            <div class="post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">Our Services</h4>
                                <ul>
                                    <li><a href="#">aciform</a> &nbsp;</li>
                                    <li><a href="#">championship</a> &nbsp; </li>
                                    <li><a href="#">chastening</a> &nbsp; </li>
                                    <li><a href="#">clerkship</a> &nbsp; </li>
                                    <li><a href="#">disinclination</a> &nbsp; </li>
                                    <li><a href="#">disinfection</a> &nbsp; </li>
                                    <li><a href="#">dispatch</a> &nbsp; </li>
                                </ul>
                            </div>
                            <div class="widget widget_gallery">
                                <h5 class="widget-title">Gallery</h5>
                                <ul>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic2.jpg" alt=""></div></a></li>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic1.jpg" alt=""></div></a></li>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic5.jpg" alt=""></div></a></li>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic7.jpg" alt=""></div></a></li>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic8.jpg" alt=""></a></div></li>
                                    <li><a href="#"><div class="post-thum img-overlay1 img-effect zoom-slow">
										<img src="images/gallery/pic9.jpg" alt=""></div></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->

@endsection