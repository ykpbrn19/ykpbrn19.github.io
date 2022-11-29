<?php include("header.php");?>
<?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM sayfalar WHERE seo = '$id'"));?>



 
			<section class="wpb_row vc_row-fluid vc_custom_1465877763003 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-2 vc_col-md-8"><div class="vc_column-inner "><div class="wpb_wrapper "  >  
    <div class="about-text-intro text-center">
      <h2 class="box-title"><?php echo $sayfa->adi;?></h2>
     
	 <div class="wpb_text_column wpb_content_element  vc_custom_1462849314676">
		<div class="wpb_wrapper">
			<?php echo $sayfa->aciklama;?>
		</div>
	</div>
    </div>
   
</div></div></div></div></div></section><section class="wpb_row vc_row-fluid vc_custom_1461298665627 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper "  ><h2 style="text-align: center" class="vc_custom_heading box-title">ÇALIŞMA EKİBİMİZ</h2>
  <div class="text-center">
      <div class="tiny-border"></div>
  </div>

  </div></div></div>
  
  
  
                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM ekipler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   


  
  
  
  
  <div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper "  >
  <div class="team-box">
      <div class="team-inner">
          <img src="uploads/ekipler/large/<?php echo $haberSonuc->resim;?>" alt="" class="img-circle">
          <div class="mask"></div>
          <ul class="team-social-list"> 
              <li><a href="<?php echo $haberSonuc->pinterest;?>"><i class="fa fa-envelope"></i></a></li>                                   
              <li><a href="<?php echo $haberSonuc->facebook;?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $haberSonuc->twitter;?>"><i class="fa fa-linkedin"></i></a></li>                                    
          </ul>
      </div>                                
      <h6><?php echo $haberSonuc->adi;?></h6>
      <div class="subtext"><?php echo $haberSonuc->mevki;?></div>
  </div> 

</div></div></div>





          <?php }?>












		  







</div></div></section>






<?php include("footer.php");?>
	