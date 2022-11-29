<?php include("header.php");?>
<?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM urunler WHERE seo = '$id'"));?>
<?php $kid = $sayfa->kategori;?>
<?php $kidd = $sayfa->id;?>

		
<section id="subheader" data-speed="8" data-type="background" class="subheader padding-top-bottom"  style="theme-plugins/themes/images/bg/bg-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Projelerimiz</h1>
                                    <ul class="breadcrumbs"><li><a rel="v:url" property="v:title" href="index.html">Anasayfa</a></li>
									<li><a rel="v:url" property="v:title" href="projelerimiz.html">Projelerimiz</a></li><li class="active"><?php echo $sayfa->adi;?></li></ul> 
                         
            </div>
        </div>
    </div>
</section>
	
	<section class="wpb_row vc_row-fluid vc_custom_1461642218094"><div class="container"><div class="row">
  
  
  <div class="wpb_column vc_column_container vc_col-sm-9"><div class="vc_column-inner "><div class="wpb_wrapper "  >
      <div class="project-slider">  
       
	   
	   
	   
                    <div class="item"><img src="uploads/urunler/large/<?php echo $sayfa->resim;?>" width="850px"  height="600px" alt=""></div>
					
					
											                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM diger_resim WHERE  resim_id = $kidd ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
						
					
					
					
					
                    <div class="item"><img src="uploads/urunler/diger/large/<?php echo $haberSonuc->resim;?>" width="850px"  height="600px" alt=""></div>
          
		  
		  
		  
		  	 <?php }?>
		  
      </div>

    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper "  ><h2 style="text-align: left" class="vc_custom_heading vc_custom_1461641890814">PROJE DETAYLARI</h2>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<?php echo $sayfa->aciklama;?>
<ul class="project-list">
<li><strong>Firma adı :</strong> <?php echo $sayfa->efiyat;?></li>
<li><strong>Proje Linki :</strong> <?php echo $sayfa->ingadi;?></li>
<li><strong>Proje Etiketleri:</strong> <?php echo $sayfa->video;?></li>
<li><strong>Yapım Tarihi:</strong> <?php echo $sayfa->ukod;?></li>
</ul>

		</div>
	</div>
</div></div></div></div></div></section>

<!-- Related Project begin -->
<section id="section-related-project" class="no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-projects-2 clearfix">                                
                    <div class="latest-projects-wrapper">
                        <div class="text-center">
                            <h2 class="box-title">Güncel Projelerimiz</h2>                                
                            <div class="tiny-border"></div>
                        </div>
                        <div id="related-projects" class="latest-projects-items">

                            <!-- begin custom related loop -->
 
 
 
 
 
 
 				            <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
				
			 
      <div class="item">
          <div class="project-item-inner">
              <img width="750" height="561" src="uploads/urunler/large/<?php echo $haberSonuc->resim;?>" class="img-responsive wp-post-image" alt="medium-2" srcset="uploads/urunler/large/<?php echo $haberSonuc->resim;?> 750w, uploads/urunler/large/<?php echo $haberSonuc->resim;?> 300w" sizes="(max-width: 750px) 100vw, 750px" />              <div class="project-details">
                  <p class="folio-title"><a href="proje-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></p>
                  <p class="folio-cate"><i class="fa fa-tag"></i>
                    <a href="proje-detay-<?php echo $haberSonuc->seo;?>.html"></a>Projelerimiz<span></span>  
                  </p>
                  <div class="folio-buttons">
                      <a href="uploads/urunler/large/<?php echo $haberSonuc->resim;?>" title="" class="folio"><i class="fa fa-search"></i></a>
                      <a href="proje-detay-<?php echo $haberSonuc->seo;?>.html"><i class="fa fa-link"></i></a>
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
</section>
<!-- Related Project close -->
 
<?php include("footer.php");?>
	