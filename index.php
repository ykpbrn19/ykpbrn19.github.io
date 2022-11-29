<?php include("header.php");?>




<section class="wpb_row vc_row-fluid vc_custom_1461666602191">
    <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper ">
                    <div class="wpb_revslider_element wpb_content_element">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                            style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                            <!-- START REVOLUTION SLIDER 5.2.6 fullwidth mode -->
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;"
                                data-version="5.2.6">
                                <ul>
                                    <!-- SLIDE  -->



                                    <?php 
 $haberSorgu = mysql_query("SELECT * FROM slider WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>





                                    <li data-index="rs-1" data-transition="random-premium" data-slotamount="7"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="300"
                                        data-thumb="uploads/slider/<?php echo $haberSonuc->resim;?>" data-rotate="0"
                                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                        data-param8="" data-param9="" data-param10="" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="theme-plugins/plugins/revslider/admin/assets/images/dummy.png" alt=""
                                            title="bg-1" width="1900" height="590"
                                            data-lazyload="uploads/slider/<?php echo $haberSonuc->resim;?>"
                                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                            data-bgparallax="off" class="rev-slidebg" data-no-retina="">
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['184','184','184','184']" data-width="none"
                                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                            data-transform_in="y:50px;opacity:0;s:700;e:Power3.easeInOut;"
                                            data-transform_out="y:50px;opacity:0;s:300;e:Power3.easeInOut;"
                                            data-start="800" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on"
                                            style="z-index: 5; white-space: nowrap; font-size: 30px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Droid Serif', Arial, Helvetica, sans-serif;font-style:italic;">
                                            <?php echo $haberSonuc->adi;?> </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['250','250','250','250']" data-width="none"
                                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                            data-transform_in="y:-50px;opacity:0;s:700;e:Power3.easeInOut;"
                                            data-transform_out="y:-50px;opacity:0;s:300;e:Power3.easeInOut;"
                                            data-start="1500" data-splitin="none" data-splitout="none"
                                            data-responsive_offset="on"
                                            style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: 22px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Raleway, Arial, Helvetica, sans-serif;text-transform:uppercase;">
                                            <?php echo $haberSonuc->ingadi;?></div>

                                        <!-- LAYER NR. 3 -->
                                        <a class="tp-caption rev-btn  tp-resizeme" href="projelerimiz.html"
                                            target="_blank" id="slide-1-layer-7"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['-97','-97','-97','-97']" data-y="['top','top','top','top']"
                                            data-voffset="['330','330','330','330']" data-width="none"
                                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(44, 62, 80, 1.00);bc:rgba(44, 62, 80, 0);"
                                            data-transform_in="x:-50px;opacity:0;s:700;e:Power3.easeInOut;"
                                            data-transform_out="x:-50px;opacity:0;s:300;e:Power3.easeInOut;"
                                            data-start="1900" data-splitin="none" data-splitout="none" data-actions=''
                                            data-responsive_offset="on"
                                            style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 21px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Raleway, Arial, Helvetica, sans-serif;background-color:rgba(41, 182, 246, 1.00);padding:17px 40px 17px 40px;border-color:rgba(0, 0, 0, 0);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Projelerimiz
                                        </a>

                                        <!-- LAYER NR. 4 -->
                                        <a class="tp-caption rev-btn  tp-resizeme" href="iletisim.html" target="_blank"
                                            id="slide-1-layer-8" data-x="['center','center','center','center']"
                                            data-hoffset="['95','95','95','95']" data-y="['top','top','top','top']"
                                            data-voffset="['330','330','330','330']" data-width="none"
                                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(44, 62, 80, 1.00);bc:rgba(44, 62, 80, 1.00);"
                                            data-transform_in="x:50px;opacity:0;s:700;e:Power3.easeInOut;"
                                            data-transform_out="x:50px;opacity:0;s:300;e:Power3.easeInOut;"
                                            data-start="2200" data-splitin="none" data-splitout="none" data-actions=''
                                            data-responsive_offset="on"
                                            style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 21px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Raleway, Arial, Helvetica, sans-serif;padding:15px 40px 15px 40px;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:2px;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">İLETİŞİM
                                        </a>
                                    </li>





                                    <?php }?>

                                </ul>
                                <script>
                                var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                var htmlDivCss = "";
                                if (htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                } else {
                                    var htmlDiv = document.createElement("div");
                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                }
                                </script>
                                <div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);">
                                </div>
                            </div>
                            <script>
                            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                            var htmlDivCss = "";
                            if (htmlDiv) {
                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                            } else {
                                var htmlDiv = document.createElement("div");
                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                            }
                            </script>
                            <script type="text/javascript">
                            /******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

                            var setREVStartSize = function() {
                                try {
                                    var e = new Object,
                                        i = jQuery(window).width(),
                                        t = 9999,
                                        r = 0,
                                        n = 0,
                                        l = 0,
                                        f = 0,
                                        s = 0,
                                        h = 0;
                                    e.c = jQuery('#rev_slider_1_1');
                                    e.responsiveLevels = [1240, 1024, 778, 480];
                                    e.gridwidth = [1240, 1024, 778, 480];
                                    e.gridheight = [600, 600, 500, 400];

                                    e.sliderLayout = "fullwidth";
                                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                            f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e
                                        .gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s,
                                        h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                        var u = (e.c.width(), jQuery(window).height());
                                        if (void 0 != e.fullScreenOffsetContainer) {
                                            var c = e.fullScreenOffsetContainer.split(",");
                                            if (c) jQuery.each(c, function(e, i) {
                                                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e
                                                .fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(
                                                    window).height() * parseInt(e.fullScreenOffset, 0) / 100 :
                                                void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (
                                                    u -= parseInt(e.fullScreenOffset, 0))
                                        }
                                        f = u
                                    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                    e.c.closest(".rev_slider_wrapper").css({
                                        height: f
                                    })

                                } catch (d) {
                                    console.log("Failure at Presize of Slider:" + d)
                                }
                            };

                            setREVStartSize();

                            var tpj = jQuery;

                            var revapi1;
                            tpj(document).ready(function() {
                                if (tpj("#rev_slider_1_1").revolution == undefined) {
                                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                                } else {
                                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                        sliderType: "standard",
                                        jsFileLocation: "theme-plugins/plugins/revslider/public/assets/js/",
                                        sliderLayout: "fullwidth",
                                        dottedOverlay: "none",
                                        delay: 5000,
                                        navigation: {
                                            keyboardNavigation: "off",
                                            keyboard_direction: "horizontal",
                                            mouseScrollNavigation: "off",
                                            mouseScrollReverse: "default",
                                            onHoverStop: "on",
                                            touch: {
                                                touchenabled: "on",
                                                swipe_threshold: 75,
                                                swipe_min_touches: 50,
                                                swipe_direction: "horizontal",
                                                drag_block_vertical: false
                                            },
                                            arrows: {
                                                style: "",
                                                enable: true,
                                                hide_onmobile: true,
                                                hide_under: 600,
                                                hide_onleave: true,
                                                hide_delay: 200,
                                                hide_delay_mobile: 1200,
                                                tmp: '',
                                                left: {
                                                    h_align: "left",
                                                    v_align: "center",
                                                    h_offset: 30,
                                                    v_offset: 0
                                                },
                                                right: {
                                                    h_align: "right",
                                                    v_align: "center",
                                                    h_offset: 30,
                                                    v_offset: 0
                                                }
                                            }
                                        },
                                        responsiveLevels: [1240, 1024, 778, 480],
                                        visibilityLevels: [1240, 1024, 778, 480],
                                        gridwidth: [1240, 1024, 778, 480],
                                        gridheight: [600, 600, 500, 400],
                                        lazyType: "smart",
                                        parallax: {
                                            type: "mouse",
                                            origo: "slidercenter",
                                            speed: 2000,
                                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50,
                                                51, 55
                                            ],
                                            type: "mouse",
                                        },
                                        shadow: 0,
                                        spinner: "off",
                                        stopLoop: "off",
                                        stopAfterLoops: -1,
                                        stopAtSlide: -1,
                                        shuffle: "off",
                                        autoHeight: "off",
                                        hideThumbsOnMobile: "off",
                                        hideSliderAtLimit: 0,
                                        hideCaptionAtLimit: 0,
                                        hideAllCaptionAtLilmit: 0,
                                        debugMode: false,
                                        fallbacks: {
                                            simplifyAll: "off",
                                            nextSlideOnWindowFocus: "off",
                                            disableFocusListener: false,
                                        }
                                    });
                                }
                            }); /*ready*/
                            </script>
                        </div><!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="wpb_row vc_row-fluid">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <div class="wpb_single_image wpb_content_element vc_align_left   img-responsive">
                            <?php 
 $haberSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 and id = 27  limit 1");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                    <img width="270" height="270"
                                        src="uploads/sayfalar/large/<?php echo $haberSonuc->resim;?>"
                                        class="vc_single_image-img attachment-full" alt="we-are-thumb"
                                        srcset="uploads/sayfalar/large/<?php echo $haberSonuc->resim;?> 270w, uploads/sayfalar/large/<?php echo $haberSonuc->resim;?> 150w"
                                        sizes="(max-width: 270px) 100vw, 270px">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-box wpb_column vc_column_container vc_col-sm-5">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <h2 style="text-align: left" class="vc_custom_heading box-title">Biz Kimiz ?</h2>
                        <div class="text-left">
                            <div class="separator-border "
                                style="margin: 0px 0 20px 0;width: 40px;border-top-width: 2px;border-top-color: #999999;border-top-style: solid;clear: both;">
                            </div>
                        </div>


                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">

                                <?php echo substr($haberSonuc->aciklama,0,650);?> <?php }?>

                                </ul>

                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span>
                        </div>

                        <a href="sayfa-detay-hakkimizda.html" class="btn btn-primary btn-small">Devamını Oku</a>

                    </div>
                </div>
            </div>
            <div class="about-box wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <h2 style="text-align: left" class="vc_custom_heading box-title">Servisler</h2>
                        <div class="text-left">
                            <div class="separator-border "
                                style="margin: 0px 0 20px 0;width: 40px;border-top-width: 2px;border-top-color: #999999;border-top-style: solid;clear: both;">
                            </div>
                        </div>


                        <div class="feature" style="margin-bottom:">
                            <i class="fa fa-bar-chart"></i>
                            <h3>Mobil Uyumlu Responsive Websiteler</h3>
                            <p>Mobil uyumlu tasarımlarımızla Google dostu sitelere sahip olabilirsiniz.</p>
                        </div>

                        <div class="feature" style="margin-bottom:">
                            <i class="fa fa-diamond"></i>
                            <h3>E-ticaret Yönetimi</h3>
                            <p>Akıllı ve güvenilir paneller sayesinde e-ticaret sitesi yönetmek artık çok kolay.</p>
                        </div>

                        <div class="feature" style="margin-bottom:0">
                            <i class="fa fa-bullhorn"></i>
                            <h3>Reklam ve Tanıtım</h3>
                            <p>Websitelerinizin tanıtımını yapmak bizim işimiz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row vc_row-fluid no-padding">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <div class="latest-projects clearfix">
                            <div class="latest-projects-intro">
                                <h2 class="box-title">GÜNCEL PROJELER</h2>
                                <div class="tiny-border-light"></div>
                                <p>Sizler için yaptığımız tüm çalışmalarımıza gözatabilirsiniz...</p>
                            </div>
                            <div class="latest-projects-wrapper">
                                <div id="latest-projects-items" class="latest-projects-items">



                                    <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>

                                    <div class="item">
                                        <img width="750" height="561"
                                            src="uploads/urunler/large/<?php echo $haberSonuc->resim;?>"
                                            class="img-responsive wp-post-image" alt="medium-2"
                                            srcset="uploads/urunler/large/<?php echo $haberSonuc->resim;?> 750w, uploads/urunler/large/<?php echo $haberSonuc->resim;?> 300w"
                                            sizes="(max-width: 750px) 100vw, 750px">
                                        <div class="project-details">
                                            <p class="folio-title"><a
                                                    href="proje-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a>
                                            </p>
                                            <p class="folio-cate"><i class="fa fa-tag"></i>
                                                <a
                                                    href="categories/business/index.htm"><?php echo $haberSonuc->ukod;?></a><span>,</span>
                                            </p>
                                            <div class="folio-buttons">
                                                <a href="uploads/urunler/large/<?php echo $haberSonuc->resim;?>"
                                                    title="Successful Business" class="folio"><i
                                                        class="fa fa-search"></i></a>
                                                <a href="proje-detay-<?php echo $haberSonuc->seo;?>.html"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>



                                    <?php }?>










                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row vc_row-fluid">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <div class="latest-blog-posts">
                            <h2 class="box-title">HABERLER & DUYURULAR</h2>
                            <div class="compact-buttons">
                                <div class="latest-prev compact-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="latest-next compact-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="tiny-border"></div>

                            <div class=" latest-news-items">



                                <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>



                                <div class="item">
                                    <div class="latest-blog-post-img">
                                        <img width="370" height="277"
                                            src="uploads/haberler/<?php echo $haberSonuc->resim;?>"
                                            class="img-responsive wp-post-image" alt="5"
                                            srcset="uploads/haberler/<?php echo $haberSonuc->resim;?> 370w, uploads/haberler/<?php echo $haberSonuc->resim;?> 300w"
                                            sizes="(max-width: 370px) 100vw, 370px">
                                        <div class="latest-blog-post-date">
                                            <?php echo substr($haberSonuc->tarih,0,2);?>
                                            <span><?php echo substr($haberSonuc->tarih,2,4);?></span>
                                        </div>
                                    </div>
                                    <div class="latest-blog-post-details">
                                        <p class="title"><a
                                                href="haber-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a>
                                        </p>
                                        <?php echo substr($haberSonuc->aciklama,0,250);?>
                                        <div class="latest-blog-post-data">
                                            <span class="tags"><i class="fa fa-tags"></i> <a
                                                    href="haber-detay-<?php echo $haberSonuc->seo;?>.html"
                                                    rel="category tag">Bizden Haberler</a></span> <span
                                                class="btn-read"><a
                                                    href="haber-detay-<?php echo $haberSonuc->seo;?>.html"><i
                                                        class="fa fa-plus-square"></i> Devamını oku</a></span>
                                        </div>
                                    </div>
                                </div>






                                <?php }?>













                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <div class="testimonials-slider-wrapper">
                            <h2 class="box-title">Müşteri Yorumları</h2>
                            <div class="compact-buttons">
                                <div class="testi-prev compact-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="testi-next compact-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="tiny-border"></div>
                            <div class="testimonials-slider">
                                <?php 
 $haberSorgu = mysql_query("SELECT * FROM duyurular WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>

                                <div class="item">
                                    <div class="testi-boxes">
                                        <blockquote>
                                            <?php echo $haberSonuc->aciklama;?>
                                        </blockquote>
                                        <div class="testi-info clearfix">
                                            <img width="50" height="50"
                                                src="uploads/duyurular/<?php echo $haberSonuc->resim;?>"
                                                class="img-circle wp-post-image" alt="thumb-4">
                                            <div class="testi-details">
                                                <span><?php echo $haberSonuc->adi;?></span>
                                                <?php echo $haberSonuc->ingadi;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>









                                <?php }?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php");?>