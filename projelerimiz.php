<?php include("header.php");?>

		

 
		 <!-- Menu OffCanvas right close -->
 
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader" 
               
                                              style="background-image: url('theme-plugins/themes/images/bg/bg-1.jpg');"
                        >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Projelerimiz </h1>
                                        
                        <ul class="breadcrumbs"><li><a rel="v:url" property="v:title" href="index.html">Anasayfa</a></li><li class="active">Projelerimiz</li></ul>                        
                                    </div>
            </div>
        </div>
    </section>

    		<section class="wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper "  >
  <div id="portfolio-filter" class="project-page">
      <ul id="filter">
          <li> <a href="#" class="current" data-filter="*" title=""> Hepsi</a> </li>
		  
		  
		  			            <?php 
 $haberSorgu = mysql_query("SELECT * FROM urun_kategori WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
				
		  
		  
                     <li><a href="#" data-filter=".<?php echo $haberSonuc->id;?>"><?php echo $haberSonuc->kategori_adi;?> </a></li>
                
				
				    <?php }?>		
				
				
				
				
                </ul>
  </div>          
  <div class="clearfix"></div>
  
  <div id="projects-grid" class="projects-grid-5">
             
			 
			 		
				            <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
				
			 
      <div class="project-item <?php echo $haberSonuc->kategori;?> ">
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
		   
      

</div></div></div></div></div></section>
       
<?php include("footer.php");?>
	