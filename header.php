<?php 
define("GUVENLIK",true);?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js lt-ie9" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php
include("panel/ayar.php");
include("panel/fonksiyon.php");
?><?php echo $ayar->site_title; ?></title>
<meta name="keywords" content="<?php echo $ayar->site_meta; ?>" />
<meta name="Title" content="<?php echo $ayar->firma_adi; ?>" />
<meta name="page-topic" content="<?php echo $ayar->site_title; ?>" />
<link rel="shortcut icon" href="uploads/logo/favicon/<?php echo $ayar->firma_icon; ?>"></title>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/demo.thememodern.com\/compact\/includes\/js\/wp-emoji-release.min.js?ver=4.5.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='theme-plugins/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all'>
<link rel='stylesheet' id='rs-plugin-settings-css' href='theme-plugins/plugins/revslider/public/assets/css/settings.css?ver=5.2.6' type='text/css' media='all'>
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce-layout-css' href='theme-plugins/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.6.2' type='text/css' media='all'>
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='theme-plugins/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.6.2' type='text/css' media='only screen and (max-width: 768px)'>
<link rel='stylesheet' id='woocommerce-general-css' href='theme-plugins/plugins/woocommerce/assets/css/woocommerce.css?ver=2.6.2' type='text/css' media='all'>
<link rel='stylesheet' id='compact-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C100italic%2C100%2C200italic%2C200%2C300%2C300italic%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDroid%2BSerif%3A400%2C400italic%2C700%2C700italic%7CLato%3A400%2C100%2C100italic%2C300%2C300italic%2C400italic%2C700%2C700italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all'>
<link rel='stylesheet' id='compact-bootstrap-css' href='theme-plugins/themes/css/bootstrap.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-font-awesome-css' href='theme-plugins/themes/fonts/font-awesome/css/font-awesome.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-carousel-css' href='theme-plugins/themes/css/owl.carousel.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-owl.theme-css' href='theme-plugins/themes/css/owl.theme.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-animate-css' href='theme-plugins/themes/css/animate.min.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-magnific-popup-css' href='theme-plugins/themes/css/magnific-popup.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-bg-image-css' href='theme-plugins/themes/css/bg-image.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-rev-settings-css' href='theme-plugins/themes/css/rev-settings.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-countdown-css' href='theme-plugins/themes/css/jquery.countdown.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-woocommerce-css' href='theme-plugins/themes/css/woocommerce.css?ver=4.5.3' type='text/css' media='all'>
<link rel='stylesheet' id='compact-style-css' href='theme-plugins/themes/style.css?ver=21-05-2015' type='text/css' media='all'>
<style id='compact-style-inline-css' type='text/css'>
	/* Color Scheme */	

	a{color: #2F4048;}

	/* default color: #2F4048*/
	nav.site-desktop-menu ul li ul li a:hover, .feature:hover i,
	.latest-projects .latest-projects-intro, .owl-theme .owl-controls.clickable .owl-buttons div:hover, 
	.sep-background-mask, form .newsletter input[type="submit"], .pro-bar, .btn-primary, .owl-theme .owl-controls .owl-buttons div:hover,
	 #to-the-top:hover, .box-intro-video .btn-intro-video, .tagcloud a:hover, #myModal .close,
	.pagination li span.current, .pagination li a:hover, .comments-area input[type=submit], 
	#btn-close-canvasmenu, .compact-menu-canvas nav ul li a:hover, .header-buttons .cart-button .mini-cart-counter, 
	.social-share a:hover, .owl-theme .owl-controls .owl-page span, .latest-projects-wrapper .owl-theme .owl-controls .owl-buttons div, .compact-buttons div:hover,
	div.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top.tab4 .vc_tta-tab.vc_active>a::before,
	div.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a,
	div.vc_tta-tabs.vc_tta-color-white.vc_tta-style-classic.tab2 .vc_tta-panel.vc_active .vc_tta-panel-title>a:before,
	div.vc_tta-tabs.vc_tta-color-white.vc_tta-style-classic.tab3 .vc_tta-panel.vc_active .vc_tta-panel-title>a,
	div.vc_tta.vc_tta-accordion .vc_tta-controls-icon-position-left.vc_tta-panel-title>a:hover, 
	div.vc_tta-color-white.vc_tta-style-classic.tab1 .vc_tta-panel.vc_active .vc_tta-panel-title>a,
	div.vc_tta-accordion.vc_tta-color-white.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a,
	div.vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top.tab2 .vc_tta-tab.vc_active>a::after,
	.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, 
	.woocommerce #respond input#submit.disabled, .woocommerce #respond input#submit:disabled, .woocommerce #respond input#submit[disabled]:disabled, 
	.woocommerce a.button.disabled, .woocommerce a.button:disabled, .woocommerce a.button[disabled]:disabled, .woocommerce button.button.disabled, 
	.woocommerce button.button:disabled, .woocommerce button.button[disabled]:disabled, 
	.woocommerce input.button.disabled, .woocommerce input.button:disabled, .woocommerce input.button[disabled]:disabled,
	.woocommerce .woocommerce-pagination ul.page-numbers li span.current, .woocommerce .woocommerce-pagination ul.page-numbers li a:hover,
	.woocommerce .button.add_to_cart_button, .woocommerce .added_to_cart.wc-forward
	{
		background-color:#2F4048;
	}
	.team-box:hover .team-inner .mask, .box-intro-video .btn-intro-video:hover{
		background-color: #2F4048;
		opacity: 0.8;
	}
	.header-buttons a i.fa:hover, .feature i, .project-details .folio-buttons i, .testi-boxes blockquote:before,
	.latest-blog-post-img .latest-blog-post-date, .latest-blog-post-details p.title a:hover,
	.latest-blog-post-details .latest-blog-post-data span.tags i, .latest-blog-post-details .latest-blog-post-data span.tags a:hover,
	.latest-blog-post-details .latest-blog-post-data span.btn-read a i,
	.latest-blog-post-details .latest-blog-post-data span.btn-read a:hover, footer .main-footer .widget-inner ul li a:hover,
	.site-header-2 .search-bar .search-submit:hover, .project-details p.folio-cate i, #filter li .current, #filter li a:hover,
	.widget_search .search-submit:hover, .team-box .team-inner ul li a:hover, .pricing-table-2 .plan-price,
	ul.countdown li span, .post-metadata i, .main-sidebar .widget ul li a:hover, .post-content .post-title a:hover, .post-metadata a:hover,
	nav.site-desktop-menu > ul > li > a:hover, .single-tags .fa, a.btn.btn-border-grey:hover,.single-tags a:hover,
	.nav-links a:hover .post-title,.comment-reply-link:hover, .widget .search-form .search-submit:hover, .project-details p a:hover,
	.post-date .date-day
	{
		color: #2F4048;
	}
	body, .pricing-item, header.site-header {
		border-top-color: #2F4048;
	}
	.feature i, .project-details .folio-buttons i, nav.site-desktop-menu > ul > li > ul, .social-share a:hover,
	.tagcloud a:hover, .compact-buttons div:hover, .testimonials-slider-wrapper .owl-theme .owl-controls .owl-buttons div:hover,
	.latest-blog-posts .owl-theme .owl-controls .owl-buttons div:hover,
	div.vc_tta-accordion.vc_tta-color-white.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a,
	a.btn.btn-border-grey:hover
	{
		border-color: #2F4048;
	}
	blockquote {
		border-left-color: #2F4048;
	}
	.site-header-1 .stuck,div.vc_tta-color-white.vc_tta-style-classic.tab4 .vc_tta-panel.vc_active .vc_tta-panel-title>a  {
		border-top-color: #2F4048;
	}
	.tab3.vc_tta.vc_tta-spacing-1 .vc_tta-tabs-list {
		border-bottom-color: #2F4048;
	}
	::-moz-selection { 
	    color: #fff;
	    background: #2F4048;
	}
	::selection {
	    color: #fff;
	    background: #2F4048;
	}

</style>
<link rel='stylesheet' id='js_composer_front-css' href='theme-plugins/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all'>
<script type='text/javascript' src='includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='theme-plugins/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.6'></script>
<script type='text/javascript' src='theme-plugins/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.6'></script>

<script type="text/javascript" src="theme-plugins/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="theme-plugins/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="theme-plugins/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="theme-plugins/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="theme-plugins/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>



<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/compact\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compact\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.thememodern.com\/compact\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='theme-plugins/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.6.2'></script>
<script type='text/javascript' src='theme-plugins/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=4.12'></script>


<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://demo.thememodern.com/theme-plugins/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="https://demo.thememodern.com/theme-plugins/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.2.6 - responsive, Mobile-Friendly Slider Plugin for themes-1 with comfortable drag and drop interface.">
<style type="text/css" title="dynamic-css" class="options-output">body{background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:left top;background-image:url('theme-plugins/themes/switcher/images/patern01.png');}</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1461666602191{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1461221530187{padding-top: 0px !important;padding-bottom: 0px !important;background-position: 0 0 !important;background-repeat: repeat !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="home page page-id-56 page-template page-template-page-templates page-template-template-canvas page-template-page-templatestemplate-canvas-php wpb-js-composer js-comp-ver-4.12 vc_responsive">
            <!-- Preload images start //-->
        <div class="images-preloader" style="display:none !important;" id="images-preloader" style="display:none !important;">
          <div class="spinner">
              <div class="bounce1" style="display:none !important;"></div>
              <div class="bounce2" style="display:none !important;"></div>
              <div class="bounce3" style="display:none !important;"></div>
          </div>
        </div>
        <!-- Preload images end //-->
    
    <div id="wrapper">
        <header class="site-header-1 site-header">
        <div id="sticked-menu" class="main-bar">
          <div class="container">                
            <div class="row">                    
              <div class="col-md-12">

                <!-- logo begin -->
                                    <div id="logo" class="pull-left">                            
                        <a href="index.html">
                            <img src="uploads/logo/<?php echo $ayar->firma_logo; ?>" alt="" class="logo">
                        </a>
                    </div>
                                <!-- logo close -->

                <!-- btn-mobile menu begin -->
                <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                <!-- btn-mobile menu close -->  

                <!-- mobile menu begin -->
                <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
                    <ul></ul>
                </nav>  
                <!-- mobile menu close -->  

                <!-- desktop menu begin --> 
                <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                    <ul data-breakpoint="800" id="menu-primary-menu" class="clearfix"><li id="menu-item-315" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-56 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-315  active"><a title="" href="index.html">Anasayfa </a>

</li>
<li id="menu-item-363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-363 "><a  href="#">Kurumsal </a>
<ul role="menu" class=" ">
			                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
	
	
	
	<li id="menu-item-319" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-319"><a title="<?php echo $haberSonuc->adi;?>" href="sayfa-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></li>

	
	   <?php }?>
	
	
	
	</ul>
</li>
<li id="menu-item-312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-312 "><a title="Project" href="projelerimiz.html">Projelerimiz </a>

</li>
<li id="menu-item-308" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-308 "><a title="Service" href="hizmetler.html">Hizmetler </a>
<ul role="menu" class=" ">
	                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM hizmetler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
	
	
	
	<li id="menu-item-319" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-319"><a title="<?php echo $haberSonuc->adi;?>" href="hizmet-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></li>

	
	   <?php }?>
	
	</ul>
</li>
<li id="menu-item-822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-822 "><a title="Shop" href="haberler.html">Haberler </a>

</li>
<li id="menu-item-351" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-351 "><a title="Blog" href="foto-galeri.html">Galeri </a>

</li>
<li id="menu-item-309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-309"><a title="Contact Us" href="iletisim.html">İletişim</a></li>
</ul>                </nav>
                <div class="header-buttons pull-right hidden-xs hidden-sm">
                                            <div class="header-contact">
                            <ul class="clearfix">
 	<li class="phone"><i class="fa fa-phone"></i> <?php echo $ayar->firma_tel; ?></li>
 	<li class="border-line">|</li>
</ul>                        </div>
                                        
                                            <!-- Button Modal popup searchbox -->
                        <div class="search-button">
                        <!-- Trigger the modal with a button -->
                            <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a>                                                                        
                        </div>
                    
                   
                                                                    
                                            <!-- Button Menu OffCanvas right -->
                        <div class="navright-button">
                            <a href="" id="btn-offcanvas-menu"><i class="fa fa-bars"></i></a>                                    
                        </div> 
                                    </div>
              </div>
            </div>
          </div>
        </div>
    </header>
    <div class="gray-line"></div>   
    
      
        <!-- Header Group Button Right close -->
        <div id="myModal" class="modal fade" role="dialog">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">                                        
                <div class="modal-body">
                    <form role="search" method="post" class="search-form" action="arama.html"> 
        <span class="search-box"> 
            <input class="search-field" type="search" value="" name="kelime" id="kelime" placeholder="Arama">
            <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </form>                </div>
            </div>
          </div>
        </div>
        <!-- Modal Search close -->
    
    <!-- Menu OffCanvas right begin -->
            <div class="navright-button hidden-sm">
            <div class="compact-menu-canvas" id="offcanvas-menu">
                <h3>Menü</h3><a id="btn-close-canvasmenu"><i class="fa fa-close"></i></a>
                <nav>
                <ul data-breakpoint="800" id="menu-right-menu" class="clearfix"><li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-56 current_page_item menu-item-255 active"><a title="" href="index.html">Anasayfa</a></li>
<li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365"><a title="Features" href="sayfa-detay-hakkimizda.html">Kurumsal</a></li>
<li id="menu-item-254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254"><a title="Pages" href="projelerimiz.html">Projelerimiz</a></li>
<li id="menu-item-366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a title="Portfolios" href="hizmetler.html">Hizmetler</a></li>
<li id="menu-item-368" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-368"><a title="Shop" href="haberler.html">Haberler</a></li>
<li id="menu-item-367" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-367"><a title="Blog" href="foto-galeri.html">Galeri</a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a title="Contact Us" href="ilesitim.html">İletişim</a></li>
</ul>                
                </nav>
            </div>
        </div> 
        <!-- Menu OffCanvas right close -->