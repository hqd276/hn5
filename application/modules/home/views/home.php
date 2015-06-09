<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">

<div class="slide" data-sr>
	<div id="carousel-home" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php foreach ($banners as $key => $value){?>
	    <li data-target="#carousel-home" data-slide-to="0" class="<?php echo ($key==0)?"active":"" ?>"></li>
	    <?php } ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	  	<?php foreach ($banners as $key => $value){?>
	    <div class="item <?php echo ($key==0)?"active":"" ?>" style="background:url(<?php echo base_url("uploads/banner/".$value['image']); ?>) no-repeat">
	    </div>
	   	<?php } ?>
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
	<p class="text-justify col-md-6 col-md-offset-3">
		<?php echo $setting['about']['data']->description;?>
		<br>
		<a class="pull-right" href="<?php echo base_url('about');?>">Xem tiếp</a>
	</p>

</div>
<div id="project" class="project" data-sr>
	<h1 class="text-uppercase">dự án</h1>

	<div class="tab-content">
	  	<div class="fade in" id="made">
			  	<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
		  		<div class="item active text-center">
		  		<?php foreach ($list_category as $key => $value){?>
		  			<div class="box col-md-3 col-xs-6 col-center">
	    			<a data-toggle="modal" data-target="#modal<?php echo $value['id']?>" href="#">
			    		<img id="image-6" src="<?php echo base_url("uploads/categories/thumbs/".$value['image']); ?>" alt="...">
			    		<span class="caption simple-caption">  
				        <p class="text-uppercase"><?php echo $value['name']; ?> <span class="btn btn-default">Xem</span></p>  
				        </span>  
			        </a>
		    		</div>
		  		<?php } ?>
		  		</div>
		  		</div>
	 	</div>
	</div>
	<?php foreach ($list_category as $key => $value){?>
	<div class="modal fade" id="modal<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"><?php echo $value['name']; ?></h4>
	      	</div>
	      	<div class="modal-body">
	      		<div id="carousel-<?php echo $value['id']; ?>" class="carousel slide" data-ride="carousel">
	      			<!-- Wrapper for slides -->
				  	<div class="carousel-inner" role="listbox">
				  		<div class="item active">
					      	<img src="<?php echo base_url("uploads/categories/".$value['image']); ?>" alt="...">
					      	<div class="carousel-caption">
						        <?php echo $value['name']; ?>
					      	</div>
					    </div>
		        	<?php if (count($value['items'])>0) 
		        	foreach ($value['items'] as $k => $v) {?>
					    <div class="item ">
					      	<img src="<?php echo base_url("uploads/gallery/".$v['image']); ?>" alt="...">
					      	<div class="carousel-caption">
						        <?php echo $v['title']; ?>
					      	</div>
					    </div>
		        	<?php }?>
	        		</div>
	        	</div>
	        	<a class="left carousel-control" href="#carousel-<?php echo $value['id']; ?>" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#carousel-<?php echo $value['id']; ?>" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
			  	</a>
	      	</div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<?php } ?>
</div>



<div id="member" class="member " data-sr>
	<h1 class="text-uppercase">thành viên</h1>
	<div class="col-md-6 col-md-offset-3">
	<?php 
	foreach ($list_member as $key => $value) {?>
		<a href="" class="col-md-4">
			<img src="<?php echo base_url("uploads/member/".$value['image']); ?>" class="img-circle">
			<div class="caption">
				<h3><?php echo $value['description'];?> <br><?php echo $value['name'];?></h3>
			</div>
		</a>
	<?php }
	?>
	</div>
</div>
<div class="clearfix"></div>
<div id="contact" class="contact " data-sr>
	<h1 class="text-uppercase">liên hệ</h1>
	<div class="contact-left-block col-md-6 ">
		<a href="" class="">
			<img src="<?php echo base_url();?>assets/images/logo1.png">
			<img src="<?php echo base_url();?>assets/images/logo2.png">
		</a>
	</div>
	
	<ul class="col-md-6 list-unstyled text-uppercase text-left">
		<li><img src="<?php echo base_url();?>assets/images/contact-mobile.png"><?php echo $setting['phone']['data']->description;?></li>
		<li><img src="<?php echo base_url();?>assets/images/contact-mail.png"><?php echo $setting['email']['data']->description;?></li>
		<li><img src="<?php echo base_url();?>assets/images/contact-address.png"><?php echo $setting['address']['data']->description;?></li>
		<li><img src="<?php echo base_url();?>assets/images/contact-fb.png"><?php echo $setting['facebook']['data']->description;?></li>
	</ul>
</div>