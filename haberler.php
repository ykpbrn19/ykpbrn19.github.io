<?php include("header.php");?>

		
<section id="subheader" data-speed="8" data-type="background" class="subheader padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Haberler & Duyurular</h1>
                                    <ul class="breadcrumbs"><li><a rel="v:url" property="v:title" href="index.html">Anasayfa</a></li><li class="active">Haberler</li></ul>                    
            </div>
        </div>
    </div>
</section>
<!--  END OF HEADER -->

<div id="content">
    <div class="container">
        <div class="row"> 
                <div id="blog-grid" class="blog-grid">
				
				
				
				
				              <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
				
				
				
				
				
                                                          <article class="item col-md-4 col-sm-6">
                    <div class="post-media">
                                            					      
					      					      					      					      <img width="360" height="270" src="uploads/haberler/<?php echo $haberSonuc->resim;?>" alt="" class="img-responsive" />
					     					                        <div class="post-date">
                            <span class="date-day"><?php echo substr($haberSonuc->tarih,0,2);?></span>
        <span class="date-month"><?php echo substr($haberSonuc->tarih,2,4);?></span>                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <h5><a href="haber-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></h5>
                        </div>
                        <div class="post-metadata">
                            <span class="byline">
                                <i class="fa fa-user"></i>
                         <?php echo $ayar->firma_adi; ?>                           </span>
                            <span class="cat-links">                                            
                                <i class="fa fa-folder-open"></i>
                                <ul class="post-categories">
	<li>Bizden Haberler</a></li></ul>                            </span>                               
                        </div>
                        <div class="post-entry">
                            <?php echo substr($haberSonuc->aciklama,0,250);?>                            
                        </div>
                    </div>
                </article>
                     
           <?php }?>
				            








					 
                 
                </div>

           
        </div>
    </div>   
</div>
       
<?php include("footer.php");?>
	