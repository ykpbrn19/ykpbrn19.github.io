 <?php
if(isset($_POST['mesajgonder'])){
	$email	=	p('email');
	$ip		= 	ip();
	$t		= 	date("Y-m-d H:i:s");
	$tarih	= 	tarih($t);

	if(empty($email))
	{
		$bilgi = '  <div class="hata">
					Lütfen email giriniz ..!
					</div>
				' ;
	}else{
		$ekle	=	Sorgu("INSERT INTO ebulten SET
							email	=	'$email',
							ip		=	'$ip',
							tarih	=	'$tarih'");
	if($ekle){
		
					$bilgi = '  <div class="tamam">
								Email Listemize kayıt oldunuz.Teşekürler
								</div>
							' ;	
		
	}else{
					$bilgi = '  <div class="hata">
									Hata Oluştu..!
								</div>
							' ;	
					}
	}
	
}?>

<section class="wpb_row vc_row-fluid vc_custom_1461221530187 vc_row-has-fill"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">

<div class="wpb_wrapper ">  <section id="section-cta" style="background-image:url(theme-plugins/uploads/2016/04/bg-team.jpg)">
  <div class="sep-background-mask"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="cal-to-action text-center">
          <span>Aklınızdaki projeniz için bizden teklif almayı unutmayınız.</span>
          <a data-gal="m_PageScroll2id" data-ps2id-offset="78" class="btn btn-border-light" href="iletisim.html" title="İletişim" target="_self">İletişim</a>      </div>
      </div>
    </div>
  </div>
  </section>
</div></div></div></div></section>










<!-- FOOTER -->
        <footer class="footer-1 bg-color-1">
         <!-- main footer begin -->
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        
<div class="col-md-3 col-sm-6">
    <div id="text-2" class="compact-widget widget_text">			<div class="textwidget"><div class="compact-widget">                                                
                                <div class="widget-inner">
                                    <img class="logo-footer" src="uploads/logo/footer/<?php echo $ayar->firma_footerlogo; ?>" alt="compact company">
                                    <p><?php echo $ayar->tanitim; ?></p>
                                    <div class="social-icons clearfix">
                                        <a href="<?php echo $ayar->facebook; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo $ayar->twitter; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php echo $ayar->gplus; ?>" class="google"><i class="fa fa-google-plus"></i></a>
                                        <a href="<?php echo $ayar->youtube; ?>" class="youtube"><i class="fa fa-youtube-play"></i></a>
                                        <a href="<?php echo $ayar->instagram; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>    
                            </div></div>
		</div></div><!-- end col-lg-3 -->

<div class="col-md-3 col-sm-6">
    <div id="text-3" class="compact-widget widget_text"><h3 class="widget-title">Hızlı Linkler</h3>		


	<div class="textwidget"><div class="compact-widget">
                               
                                <div class="widget-inner">
                                    <ul>
									 <li><a href="projelerimiz.html">Projelerimiz</a></li>
                                        <li><a href="hizmetler.html">Hizmetler</a></li>
                                        <li><a href="haberler.html">Haberler</a></li>
                                       
                                        <li><a href="foto-galeri.html">Foto Galeri</a></li>
                                        <li><a href="iletisim.html">İletişim</a></li>
                                    </ul>
                                </div>                                                   
                            </div></div>
		</div></div><!-- end col-lg-3 -->

<div class="col-md-3 col-sm-6">
    <div id="text-4" class="compact-widget widget_text"><h3 class="widget-title">İletişim Bilgileri</h3>	




	<div class="textwidget"><p><?php echo $ayar->firma_adres; ?></p>
 <p>Telefon: <?php echo $ayar->firma_tel; ?></p>
<p>Email: <?php echo $ayar->firma_email; ?></p>
                                </div>
		</div></div><!-- end col-lg-3 -->

<div class="col-md-3 col-sm-6">
    <div id="mc4wp_form_widget-4" class="compact-widget widget_mc4wp_form_widget"><h3 class="widget-title">E-bülten</h3>
	
	
	
	<script type="text/javascript">(function() {
	if (!window.mc4wp) {
		window.mc4wp = {
			listeners: [],
			forms    : {
				on: function (event, callback) {
					window.mc4wp.listeners.push({
						event   : event,
						callback: callback
					});
				}
			}
		}
	}
})();
</script






<!-- MailChimp for themes-1 - https://themes-1.org/plugins/mailchimp-for-wp/ -->

<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-38" method="post" data-id="38" data-name="newsletter"><div class="mc4wp-form-fields"><div class="compact-widget">
  <div class="widget-inner">
    <div class="newsletter newsletter-widget">
      <p><?php echo $bilgi;?></p>
      <div class="form-newsletter">
        <p><input class="newsletter-email" type="email" name="email" placeholder="Email Adresiniz"><i class="fa fa-envelope-o"></i></p>
        <p><input class="newsletter-submit" name="mesajgonder" type="submit" value="Kaydet"></p>
      </div>
    </div>                                
  </div>
</div><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></div><input type="hidden" name="_mc4wp_timestamp" value="1468428265"><input type="hidden" name="_mc4wp_form_id" value="38"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"></div><div class="mc4wp-response"></div>




</form><!-- / MailChimp for themes-1 Plugin --></div></div><!-- end col-lg-3 -->



                    </div>
                </div>
            </div>
            <!-- main footer close -->

            <!-- sub footer begin -->
             <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php echo $ayar->copyright; ?>                </div>
                    </div>
                </div>
            </div>
            <!-- sub footer close -->

        </footer>
        <!-- footer close -->   
    </div><!-- #wrapper -->
    <a id="to-the-top"><i class="fa fa-angle-up"></i></a>
<!-- END FOOTER -->

		<script type="text/javascript">
			function revslider_showDoubleJqueryError(sliderID) {
				var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
				errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
				errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
				errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
				errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
					jQuery(sliderID).show().html(errorMessage);
			}
		</script>
		<link rel='stylesheet' id='vc_google_fonts_abril_fatfaceregular-css' href='//fonts.googleapis.com/css?family=Abril+Fatface%3Aregular&#038;ver=4.5.3' type='text/css' media='all'>
<script type='text/javascript' src='theme-plugins/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/demo.thememodern.com\/compact\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='theme-plugins/plugins/contact-form-7/includes/js/scripts.js?ver=4.4.2'></script>
<script type='text/javascript' src='theme-plugins/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/compact\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compact\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='theme-plugins/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=2.6.2'></script>
<script type='text/javascript' src='theme-plugins/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/compact\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compact\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='theme-plugins/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=2.6.2'></script>
<script type='text/javascript' src='theme-plugins/themes/js/bootstrap.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/easing.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/owl.carousel.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/jquery.fitvids.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/wow.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/jquery.magnific-popup.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/jquery.waypoints.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/visible.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/sticky.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/jquery.isotope.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI&#038;ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/imagesloaded.pkgd.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/masonry.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/tipper.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/jquery.stellar.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/themes/js/compact.js?ver=4.5.3'></script>
<script type='text/javascript' src='includes/js/wp-embed.min.js?ver=4.5.3'></script>
<script type='text/javascript' src='theme-plugins/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.12'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='theme-plugins/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=3.1.10'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='https://demo.thememodern.com/theme-plugins/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=3.1.10'></script>
<![endif]-->
<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}})();</script>
<!-- color scheme -->
<link rel="stylesheet" href="theme-plugins/themes/switcher/demo.css" type="text/css">
<link rel="stylesheet" href="theme-plugins/themes/switcher/colors/<?php echo $ayar->tema; ?>.css" type="text/css" id="colors"> 
<script src="theme-plugins/themes/switcher/demo.js"></script>
   
<?php echo $ayar->google_analytics; ?>
</body>
</html>