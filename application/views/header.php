<!DOCTYPE html>
<html lang="en">
  <head>
	<title><?=$title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=base_url();?>public/themes/bootswatch/css/<?=$this->config->item('style');?>" media="screen"> 
 <link rel="stylesheet" href="<?=base_url();?>public/themes/bootswatch/css/bootswatch.min.css">	
  <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	 <link href="public/themes/bootswatch/css/bootstrap.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://code.jquery.com/jquery-ui-1.10.4.js"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?=$base_url;?>public/themes/bootswatch/js/bootswatch.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
     <script src="<?=$base_url;?>public/themes/bootswatch/js/bootstrap.min.js"></script>
	<!--<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />-->
	
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
	     <div class="navbar navbar-inverse" role="navigation">
	      <div class="container">
	          <div class="navbar-header">
	          <a href="<?=base_url()?>" class="navbar-brand"><?=$banner;?></a>
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
		        </button>
		      </div>
	         <div class="navbar-collapse" id="navbar-main">
	          <ul class="nav navbar-nav">
				
				<li>
					<?php 
						echo anchor('gig/', 'View Gig List'); 
					?>
				</li>
				<li>
					<?php 
						echo anchor('gig/add', 'Add Gig'); 
					?>
				</li>
				<li>
				<?php
				echo anchor('gig_student_list/',"Student List");
	            ?>
				</li>
				<li>
				<?php
				echo anchor('gig_student_list/add',"Register Student");
	            ?>
				</li>
				<li><a href="#" title="">Other Link</a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="container">
        	<!--<h1>Carousel</h1>-->
        	<div id="slideshow" class="carousel slide" data-ride="carousel">
        		<div class="carousel-inner">
        			<div class="item active">
						<img src="http://placekitten.com/900/200" alt="a picture">
             		</div>
             		
        			<div class="item">
						<img src="http://www.placecage.com/400/200" alt="a picture">
             		</div>
        			<div class="item">
						<img src="http://placekitten.com/700/200" alt="a picture">
             		</div>
             	</div>
             	<a href="#slideshow" class="left carousel-control" data-slide="prev">
        	 	<span class="glyphicon glyphicon-chevron-left"></span>
        	 </a>
        	 <a href="#slideshow" class="right carousel-control" data-slide="next">
        	 	<span class="glyphicon glyphicon-chevron-right"></span>
        	 </a>	
        	</div>
        	
        </div><!-- /container-->

	    </div>

  <div class="container">
