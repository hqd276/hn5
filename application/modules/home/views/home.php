<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/home.css">

<div class="slide" data-sr>
	<div id="carousel-home" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-home" data-slide-to="1"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="<? echo base_url();?>assets/images/slider/2.jpg" alt="...">
	    </div>
	    <div class="item">
	      <img src="<? echo base_url();?>assets/images/slider/4.jpg" alt="...">
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	
</div>
<div id="about" class="about text-center" data-sr>
	<h1 class="text-uppercase">giới thiệu</h1>
	<p class="text-justify col-md-6 col-md-offset-3"><?php echo $setting['about']['data']->description;?></p>
</div>
<div id="project" class="project" data-sr>
	<h1 class="text-uppercase">dự án</h1>
	<a href="#made" aria-controls="made" role="tab" data-toggle="tab" class="btn-default btn-project btn text-uppercase">đã thực hiện</a>
	<a href="#ongoing" aria-controls="ongoing" role="tab" data-toggle="tab" class="btn-default btn-project btn text-uppercase">đang thực hiện</a>
	<div class="tab-content">
	  	<div role="tabpanel" class="tab-pane fade in active" id="made">
	  		<div id="carousel-made" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-made" data-slide-to="0" class="active"></li>
			    <?php if(count($list_gallery_1)>8) {?>
			    <li data-target="#carousel-made" data-slide-to="1"></li>
			    <?php }?>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	<?php 
			  	if (count($list_gallery_1)>0) {?>
			  		<div class="item active">
			  		<?php for ($i=0; $i < 8; $i++) { 
			  			if (isset($list_gallery_1[$i])){?>
			  			<div class="box">
		    			<a data-lightbox="image1" href="<?php echo base_url("uploads/gallery/".$list_gallery_1[$i]['image']); ?>">
				    		<img src="<?php echo base_url("uploads/gallery/".$list_gallery_1[$i]['image']); ?>" alt="...">
				    		<span class="caption simple-caption">  
					        <p class="text-uppercase"><?php echo $list_gallery_1[$i]['title']; ?> <span class="btn btn-default">Xem</span></p>  
					        </span>  
				        </a>
			    		</div>
			  		<?php } 
			  		}?>
			  		</div>
			  		<div class="item">
			  		<?php if(count($list_gallery_1)>8) 
			  			for ($i=8; $i < 16; $i++) { 
			  			if (isset($list_gallery_1[$i])){?>
			  			<div class="box">
		    			<a data-lightbox="image2" href="<?php echo base_url("uploads/gallery/".$list_gallery_1[$i]['image']); ?>">
				    		<img src="<?php echo base_url("uploads/gallery/".$list_gallery_1[$i]['image']); ?>" alt="...">
				    		<span class="caption simple-caption">  
					        <p class="text-uppercase"><?php echo $list_gallery_1[$i]['title']; ?> <span class="btn btn-default">Xem</span></p>  
					        </span>  
				        </a>
			    		</div>
			  		<?php } 
			  		}?>
			  		</div>
			  	<?php }?>
			  	</div>
			  <!-- Controls -->
			  <!-- <a class="left carousel-control" href="#carousel-project" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-project" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a> -->
			</div>
	 	</div>
	  	<div role="tabpanel" class="tab-pane fade" id="ongoing">
	  		<div id="carousel-ongoing" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-ongoing" data-slide-to="0" class="active"></li>
			    <?php if(count($list_gallery_2)>8) {?>
			    <li data-target="#carousel-made" data-slide-to="1"></li>
			    <?php }?>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  	<?php 
			  	if (count($list_gallery_2)>0) {?>
			  		<div class="item active">
			  		<?php for ($i=0; $i < 8; $i++) { 
			  			if (isset($list_gallery_2[$i])){?>
			  			<div class="box">
		    			<a data-lightbox="image1" href="<?php echo base_url("uploads/gallery/".$list_gallery_2[$i]['image']); ?>">
				    		<img src="<?php echo base_url("uploads/gallery/".$list_gallery_2[$i]['image']); ?>" alt="...">
				    		<span class="caption simple-caption">  
					        <p class="text-uppercase"><?php echo $list_gallery_2[$i]['title']; ?> <span class="btn btn-default">Xem</span></p>  
					        </span>  
				        </a>
			    		</div>
			  		<?php } 
			  		}?>
			  		</div>
			  		<div class="item">
			  		<?php if(count($list_gallery_2)>8) 
			  			for ($i=8; $i < 16; $i++) { 
			  			if (isset($list_gallery_2[$i])){?>
			  			<div class="box">
		    			<a data-lightbox="image2" href="<?php echo base_url("uploads/gallery/".$list_gallery_2[$i]['image']); ?>">
				    		<img src="<?php echo base_url("uploads/gallery/".$list_gallery_2[$i]['image']); ?>" alt="...">
				    		<span class="caption simple-caption">  
					        <p class="text-uppercase"><?php echo $list_gallery_1[$i]['title']; ?> <span class="btn btn-default">Xem</span></p>  
					        </span>  
				        </a>
			    		</div>
			  		<?php } 
			  		}?>
			  		</div>
			  	<?php }?>
			  	</div>

			  <!-- Controls -->
			  <!-- <a class="left carousel-control" href="#carousel-project" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-project" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a> -->
			</div>
	  	</div>
	</div>
	
</div>
<div id="member" class="member " data-sr>
	<h1 class="text-uppercase">thành viên</h1>
	<a href="" class="col-md-2 col-md-offset-3">
		<img src="<? echo base_url();?>assets/images/logo1.png" class="img-circle">
		<div class="caption">
			<h3>KTS. <br>Quang Tran</h3>
		</div>
	</a>
	<a href="" class="col-md-2">
		<img src="<? echo base_url();?>assets/images/logo1.png" class="img-circle">
		<div class="caption">
			<h3>KTS. <br>Quang Tran</h3>
		</div>
	</a>
	<a href="" class="col-md-2">
		<img src="<? echo base_url();?>assets/images/logo1.png" class="img-circle">
		<div class="caption">
			<h3>KTS. <br>Quang Tran</h3>
		</div>
	</a>
</div>
<div class="clearfix"></div>
<div id="contact" class="contact " data-sr>
	<h1 class="text-uppercase">liên hệ</h1>
	<div class="contact-left-block col-md-6 ">
		<a href="" class="">
			<img src="<? echo base_url();?>assets/images/logo1.png">
			<img src="<? echo base_url();?>assets/images/logo2.png">
		</a>
	</div>
	
	<ul class="col-md-6 list-unstyled text-uppercase text-left">
		<li><img src="<? echo base_url();?>assets/images/contact-mobile.png"><?php echo $setting['phone']['data']->description;?></li>
		<li><img src="<? echo base_url();?>assets/images/contact-mail.png"><?php echo $setting['email']['data']->description;?></li>
		<li><img src="<? echo base_url();?>assets/images/contact-address.png"><?php echo $setting['address']['data']->description;?></li>
		<li><img src="<? echo base_url();?>assets/images/contact-fb.png"><?php echo $setting['facebook']['data']->description;?></li>
	</ul>
</div>