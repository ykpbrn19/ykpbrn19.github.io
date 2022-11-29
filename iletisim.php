<?php include("header.php");?>

	<?php
if(isset($_POST['mesajgonderr'])){
	$isim	=	p('isim');
	$email	=	p('email');
	$konu	=	p('konu');
	$mesaj	=	p('mesaj');
	$ip		= 	ip();
	$t		= 	date("Y-m-d H:i:s");
	$tarih	= 	tarih($t);

	if(empty($isim) || empty($email) || empty($mesaj))
	{
		$bilgi = '  <div class="hata">
					Gerekli alanları doldurunuz..!
					</div>
				' ;
	}else{
		$ekle	=	Sorgu("INSERT INTO iletisim SET
							isim	=	'$isim',
							email	=	'$email',
							konu	=	'$konu',
							mesaj	=	'$mesaj',
							ip		=	'$ip',
							tarih	=	'$tarih'");
	if($ekle){
		
					$bilgi = '  <div class="tamam">
								Mesajınız alınmıştır.Teşekürler
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
 
			<section class="wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="intro-text wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper "  ><h2 style="font-size: 50px;line-height: 21px;text-align: center" class="vc_custom_heading vc_custom_1461559932458">İLETİŞİM FORMU</h2>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: center;"><?php echo $bilgi;?></p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-offset-2 vc_col-md-offset-2 vc_col-sm-offset-2"><div class="vc_column-inner "><div class="wpb_wrapper "  ><div role="form" class="wpcf7" id="wpcf7-f18-p240-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form">

<div class="col-one-third">
<span class="wpcf7-form-control-wrap text-860"><input type="text" name="isim" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="Adınız ve Soyadınız" /></span>
</div>
<div class="col-one-third margin-one-third">
<span class="wpcf7-form-control-wrap email-685"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"  placeholder="Email Adresiniz" /></span>
</div>
<div class="col-one-third">
<span class="wpcf7-form-control-wrap text-689"><input type="text" name="konu" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Konu" /></span>
</div>
<div class="col-full"><span class="wpcf7-form-control-wrap textarea-982"><textarea name="mesaj" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"  placeholder="Mesajınız"></textarea></span></div>
<div class="clearfix"></div>
<div class="text-center">

<p><input type="submit" value="Gönder" name="mesajgonderr" class="wpcf7-submit btn btn-primary btn-big" /><img style="visibility: hidden;" alt="Gönderildi ..." src="tic.png" class="ajax-loader">
</p></div>
</form></div></div></div></div></div></div></section>












 <iframe src="<?php echo $ayar->google_maps; ?>" width="1500" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>  
<?php include("footer.php");?>
	