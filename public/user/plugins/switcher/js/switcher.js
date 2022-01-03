/*** Add Switcher */
function addSwitcher()
{
	'use strict';
	var dzSwitcher = '<div class="styleswitcher-right"><div class="switcher-btn-bx"><a class="switch-btn closed"><span class="fa fa-gear fa-lg fa-spin"></span></a></div><div class="styleswitcher-inner"><h6 class="switcher-title">Layout</h6><ul class="layout-view"><li class="active wide-layout">Wide</li><li class="boxed">Boxed</li></ul><h6 class="switcher-title">Nav</h6><ul class="nav-view"><li class="active nav-light">Light</li><li class="nav-dark">Dark</li></ul><h6 class="switcher-title">Header</h6><ul class="header-view"><li class="active header-fixed">Fixed</li><li class="header-static">Static</li></ul><h6 class="switcher-title">Background Image</h6><ul class="background-switcher"><li><img alt="" rel="images/background/bg1.jpg" src="images/switcher/switcher-bg/bg1.jpg"></li><li><img alt="" rel="images/background/bg2.jpg" src="images/switcher/switcher-bg/bg2.jpg"></li><li><img alt="" rel="images/background/bg3.jpg" src="images/switcher/switcher-bg/bg3.jpg"></li><li><img alt="" rel="images/background/bg4.jpg" src="images/switcher/switcher-bg/bg4.jpg"></li></ul><h6 class="switcher-title">Background Pattern</h6><ul class="pattern-switcher"><li><img alt="" rel="images/pattern/pt1.jpg" src="images/switcher/switcher-patterns/bg1.jpg"></li><li><img alt="" rel="images/pattern/pt2.jpg" src="images/switcher/switcher-patterns/bg2.jpg"></li><li><img alt="" rel="images/pattern/pt3.jpg" src="images/switcher/switcher-patterns/bg3.jpg"></li><li><img alt="" rel="images/pattern/pt4.jpg" src="images/switcher/switcher-patterns/bg4.jpg"></li><li><img alt="" rel="images/pattern/pt5.jpg" src="images/switcher/switcher-patterns/bg5.jpg"></li><li><img alt="" rel="images/pattern/pt6.jpg" src="images/switcher/switcher-patterns/bg6.jpg"></li><li><img alt="" rel="images/pattern/pt7.jpg" src="images/switcher/switcher-patterns/bg7.jpg"></li><li><img alt="" rel="images/pattern/pt8.jpg" src="images/switcher/switcher-patterns/bg8.jpg"></li><li><img alt="" rel="images/pattern/pt9.jpg" src="images/switcher/switcher-patterns/bg9.jpg"></li><li><img alt="" rel="images/pattern/pt10.jpg" src="images/switcher/switcher-patterns/bg10.jpg"></li><li><img alt="" rel="images/pattern/pt11.jpg" src="images/switcher/switcher-patterns/bg11.jpg"></li><li><img alt="" rel="images/pattern/pt12.jpg" src="images/switcher/switcher-patterns/bg12.jpg"></li></ul></div></div>';
	
	if($("#dzSwitcher").length == 0) {
		jQuery('body').append(dzSwitcher);
	}
}
jQuery(window).on('load',function(){
	'use strict';
	//=== Switcher panal slide function	=====================//
	jQuery('.styleswitcher').animate({
		'left': '-220px'
	});
	jQuery('.styleswitcher-right').animate({
		'right': '-220px',
		'left': 'auto'
	});
	jQuery('.switch-btn').addClass('closed');
	//=== Switcher panal slide function END	=====================//
	
});
	
$(function(){		
	"use strict";
	
	addSwitcher();
	
	//=== Switcher panal slide function	=====================//
	jQuery('.switch-btn').on('click',function () {	
		if (jQuery(this).hasClass('open')) {
			jQuery(this).addClass('closed');
			jQuery(this).removeClass('open');
			jQuery('.styleswitcher').animate({
				'left': '-220px'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '-220px',
				'left': 'auto'
			});
		} else {
			if (jQuery(this).hasClass('closed')) {
			jQuery(this).addClass('open');
			jQuery(this).removeClass('closed');
			jQuery('.styleswitcher').animate({
				'left': '0'
			});
			jQuery('.styleswitcher-right').animate({
				'right': '0',
				'left': 'auto'
			});
			}
		}	
	});
	//=== Switcher panal slide function END	=====================//

	//=== Color css change function	=====================//
    // Color changer
    jQuery(".skin-1").on('click',function(){
        jQuery(".skin").attr("href", "css/skin/skin-1.css");
		jQuery(".logo-header img").attr("src", "images/logo.png");
        return false;
    });
    
    jQuery(".skin-2").on('click',function(){
        jQuery(".skin").attr("href", "css/skin/skin-2.css");
		jQuery(".logo-header img").attr("src", "images/logo2.png");
        return false;
    });
    
    jQuery(".skin-3").on('click',function(){
        jQuery(".skin").attr("href", "css/skin/skin-3.css");
		jQuery(".logo-header img").attr("src", "images/logo3.png");
        return false;
    });
	
    jQuery(".skin-4").on('click',function(){
        jQuery(".skin").attr("href", "css/skin/skin-4.css");
		jQuery(".logo-header img").attr("src", "error-404.html");
        return false;
    });
	
    jQuery(".skin-5").on('click',function(){
        jQuery(".skin").attr("href", "error-404.html");
		jQuery(".logo-header img").attr("src", "error-404.html");
        return false;
    });	
	
    jQuery(".skin-6").on('click',function(){
        jQuery(".skin").attr("href", "error-404.html");
		jQuery(".logo-header img").attr("src", "error-404.html");
        return false;
    });		
		
    jQuery(".skin-7").on('click',function(){
        jQuery(".skin").attr("href", "error-404.html");
		jQuery(".logo-header img").attr("src", "error-404.html");
        return false;
    });
	
    jQuery(".skin-8").on('click',function(){
        jQuery(".skin").attr("href", "error-404.html");
		jQuery(".logo-header img").attr("src", "error-404.html");
        return false;
    });	
	//=== Color css change function	=====================//	
	
	//=== Background image change function	=====================//
	jQuery('.background-switcher li img').on('click',function(){
	 var imgbg = jQuery(this).attr('rel');
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);
	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	 });
	//=== Background image change function	End=====================//
	
	
	//=== Background pattern change function	=====================//
	jQuery('.pattern-switcher li img').on('click',function(){
	 var imgbg = jQuery(this).attr('rel');
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);
	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	 jQuery("#bg").css( "background-size", "auto")
	 
	 });
	//=== Background pattern change function End=====================//
	

	//=== Layout boxed & fullscreen change function	=====================//
	jQuery('.layout-view li ').on('click', function(){
		jQuery('.layout-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.wide-layout').on('click',function() { 
		jQuery("body").addClass('wide-layout')
		jQuery("body").removeClass('boxed')
	});
	
	jQuery('.boxed').on('click',function() { 
		jQuery("body").addClass('boxed')
		jQuery("body").removeClass('wide-layout')
	});
	//=== Layout boxed & fullscreen change function	END=====================//
	


	//=== Nav light & dark change function	END=====================//
	jQuery('.nav-view li ').on('click', function(){
		jQuery('.nav-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.nav-light').on('click',function() { 
		jQuery(".header-nav").addClass('nav-light')
		jQuery(".header-nav").removeClass('nav-dark')
	});
	
	jQuery('.nav-dark').on('click',function() { 
		jQuery(".header-nav").addClass('nav-dark')
		jQuery(".header-nav").removeClass('nav-light')
	});
	//=== Nav light & dark change function	END=====================//	
	
	jQuery('.header-view li ').on('click', function(){
		jQuery('.header-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.header-fixed').on('click',function() { 
		jQuery(".main-bar-wraper").addClass('sticky-header')
		jQuery(".main-bar-wraper").removeClass('sticky-no')
	});
	
	jQuery('.header-static').on('click',function() { 
		jQuery(".main-bar-wraper").addClass('sticky-no')
		jQuery(".main-bar-wraper").removeClass('sticky-header')
	});
});