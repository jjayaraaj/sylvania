<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sylvania</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap-4.4.1.css" rel="stylesheet">
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  
	  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>fav/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url(); ?>fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	  
	  <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	  
	   <script src="https://www.google.com/recaptcha/api.js"></script>
	 

  </head>
  <body>
	  <div class="bg-light">
	  	<div class="container py-2">
			<div class="row justify-content-end">
				<div class="col-6 col-md-3 font-weight-light text-md-right head-text">
					<i class="fa fa-envelope-o" aria-hidden="true"></i> Info@sylvaniaglobal.com</div>
				<div  class="col-6 col-md-3 font-weight-light text-md-right head-text">
					<i class="fa fa-phone" aria-hidden="true"></i> Toll Free 1800-1211-595</div>
			</div>  
		  </div>
	  </div>
	  
	  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
       <a class="navbar-brand" href="<?php echo base_url() ?>">
			<img src="<?php echo base_url() ?>images/logo.png" class="img-fluid" alt="">
		</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item <?php echo ($menu=='') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item <?php echo ($menu=='about') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url() ?>pages/about">About Us</a>
             </li>
			   <li class="nav-item <?php echo ($menu=='products') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url() ?>pages/products">Our Products</a>
             </li>
			  <li class="nav-item <?php echo ($menu=='industry') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url() ?>pages/industry">Industry We Serve</a>
             </li>
			  <li class="nav-item <?php echo ($menu=='contact') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url() ?>pages/contact">Contact us</a>
             </li>
            
          </ul>
         
       </div>
    </nav>
	</div>	