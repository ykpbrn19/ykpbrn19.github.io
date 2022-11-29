<?php include("header.php");?>
<?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM haberler WHERE seo = '$id'"));?>

<!-- SUBHEADER -->
<section id="subheader" data-speed="8" data-type="background" class="subheader padding-top-bottom" 
         
          >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1></h1>
                       <ul class="breadcrumbs"><li><a rel="v:url" property="v:title" href="index.html">Anasayfa</a></li>
					   <li><a rel="v:url" property="v:title" href="haberler.html">Haberler</a></li>
					   <li class="active"><?php echo $sayfa->adi;?></li></ul>                       
            </div>
        </div>
    </div>
</section>
<!-- END OF SUBHEADER -->

<!-- content begin -->

<div id="content">
  <div class="container">
      <div class="row"> 
          <div class="col-md-9">
            <div class="blog-single">
              <article>
                                                                                                                                                          <div class="post-media">
                        <img src="uploads/haberler/<?php echo $sayfa->resim;?>" alt="" class="img-responsive">
                      </div>
                                                            
                                <div class="post-content single-post-content">
                  <div class="post-title">
                      <h1><?php echo $sayfa->adi;?></h1>
                  </div>
                  <div class="post-metadata">                                                              
                      <span class="posted-on"><i class="fa fa-clock-o"></i> <time class="entry-date published" datetime="2016-04-18T10:37:11+00:00"><?php echo $sayfa->tarih;?></time></span><span class="byline"><i class="fa fa-user"></i> <span class="author vcard">
					  <a class="url fn n" href="#"><?php echo $ayar->firma_adi; ?></a></span></span><span class="cat-links">
					  <i class="fa fa-folder-open"></i> <a href="#" rel="category tag">Haberler</a></span>    
                  </div>
                <div class="hr"></div>
                <div class="post-entry">
                <?php echo $sayfa->aciklama;?>


                                </div>
                <div class="footer-entry clearfix">
                                          <div class="single-tags pull-left">
                          <i class="fa fa-tags"></i>
                          <a href="#" rel="tag"><?php echo $sayfa->seo;?></a>                      </div>
                                                            <div class="social-share pull-right">
                      <a class="facebook" target="_blank" href="https://facebook.com/home?status=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><i class="icons fa fa-facebook"></i></a>                  
                      <a class="twitter" target="_blank" href="https://twitter.com/home?status=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><i class="icons fa fa-twitter"></i></a>                    
                      <a class="google" target="_blank" href="https://plus.google.com/home?status=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><i class="icons fa fa-google-plus"></i></a>                    
                      <a class="linkedin" target="_blank" href="https://linkedin.com/home?status=<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><i class="icons fa fa-linkedin"></i></a>                    
                    </div>
                                    </div>
              
            
              <div class="clearfix"></div>
            
              </article>
            </div>
            </div>  
            <div class="col-md-3">
              <div class="main-sidebar">
                
			<div id="sidebar" class="sidebar">
			
			
			
			<div id="search-2" class="widget widget_search"><form role="search" method="post" class="search-form" action="arama.html" > 
        <span class="search-box"> 
            <input class="search-field" type="search" value="" name="kelime" id="kelime" placeholder="Arama" />
            <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
        </span>
    </form></div>
			
			
			
			
			
			<div id="categories-3" class="widget widget_categories"><h3 class="widget-title">Hızlı Linkler</h3><div class="tiny-border"></div>		<ul>
	<li class="cat-item cat-item-4"><a href="index.html" >Anasayfa</a>
</li>
	<li class="cat-item cat-item-7"><a href="sayfa-detay-hakkimizda.html" >Kurumsal</a>
</li>
	<li class="cat-item cat-item-8"><a href="projelerimiz.html" >Projelerimiz</a>
</li>
	<li class="cat-item cat-item-8"><a href="hizmetler.html" >Hizmetler</a>
</li><li class="cat-item cat-item-8"><a href="haberler.html" >Haberler</a>
</li>
<li class="cat-item cat-item-8"><a href="foto-galeri.html" >Galeri</a>
</li>
<li class="cat-item cat-item-8"><a href="iletisim.html" >İletişim</a>
</li>
		</ul>
</div>






			<div id="text-6" class="widget widget_text"><h3 class="widget-title">Biz Kimiz ?</h3><div class="tiny-border"></div>	
				                      <?php 
 $haberSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 and id = 27  limit 1");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
			
			<div class="textwidget"><?php echo substr($haberSonuc->aciklama,0,650);?>   </div>         <?php }?>
		</div><div id="text-7" class="widget widget_text">		
		</div>		</div><!-- .widget-area -->
	              </div>
            </div>
        </div>
      </div>
    </div>
 </div>

       
<?php include("footer.php");?>
	