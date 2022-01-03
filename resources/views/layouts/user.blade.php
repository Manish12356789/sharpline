<!DOCTYPE html>
<!--
@Author: Satish Nepal <satish>
@Date:   06-Feb-2020 03-16-32 PM
@Email:  nepal.satish@hotmail.com
@Last modified by:   satish
@Last modified time: 12-Feb-2020 01-01-42 PM
@Copyright: Satish Nepal
-->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{asset('user/images/sharpline_fav.png')}}" type="image/png" />
	<link rel="shortcut icon" type="image/png" href="{{asset('user/images/sharpline_fav.png')}}" />

	<!-- PAGE TITLE HERE -->
	<title>Sharpline Webportal</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="{{asset('user/js/html5shiv.min.js')}}"></script>
	<script src="{{asset('user/js/respond.min.js')}}"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('user/css/skin/skin-1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/templete.css')}}">
	<link rel="stylesheet" href="{{asset('css/tempusdominus-bootstrap-4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/custom.css')}}">
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/revolution/css/navigation.css')}}">

</head>
<body id="bg">
	<div id="loading-area"></div>
		<div class="page-wraper">
			
			@include('layouts.user_header')
			@yield('content')
			@include('layouts.user_footer')

		</div>
	</div>


<!-- scroll top button -->
<button class="scroltop fa fa-arrow-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{asset('user/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('user/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('user/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('user/js/moment.min.js')}}"></script>
<script src="{{asset('user/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('user/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('user/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('user/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('user/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('user/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('user/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('user/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('user/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('user/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
<!-- revolution JS FILES -->
<script src="{{asset('user/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('user/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('user/js/rev.slider.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_3();
    }); /*ready*/
</script>
<script >
	$(function () {
		$('#datetimepicker1').datetimepicker({

            sideBySide: true
        });
	});
</script>
<script type="text/javascript">
    $('.estimate input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        $(this).parent('.btn').addClass("active");
    });
</script>
<script type="text/javascript">

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".check1 .btn").click(function() {
            $(".check1 .btn").removeClass("active");
            $(this).addClass("active");
        });
        $(".check2 .btn").click(function() {
            $(".check2 .btn").removeClass("active");
            $(this).addClass("active");
        });
        $(".check3 .btn").click(function() {
            $(".check3 .btn").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $(".estimate .btn").click(function() {
            if($(this).find('input[type="checkbox"]').is(':checked'))
{
  $(this).addClass('active');
}else
{
    $(this).removeClass('active');
}
        });
    });
</script> -->

</body>

</html>
