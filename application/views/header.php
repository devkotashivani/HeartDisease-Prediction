<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swastha Mutu: Prediction of Heart Disease</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url()?>img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url()?>img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?=base_url()?>img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?=base_url()?>img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?=base_url()?>img/favicons/manifest.json">
	<link rel="shortcut icon" href="<?=base_url()?>img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/cardio.css">
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/foo.css">
	
</head>

<body>
	<div class="preloader">
		<img src="<?=base_url()?>img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar" id="nav">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div  class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?=base_url()?>img/logo.png" data-active-url="<?=base_url();?>img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#healthlife">Health Life</a></li>
					<li><a href="#p_system">Prediction System</a></li>
					<li><a href="#charts">Charts</a></li>
					
					<li><a href="#contactus">Contact Us</a></li>
					<li>
					 <?php
                        if($this->session->userdata('username')) {
                            $user=$this->session->userdata('username');
                            $email=$this->session->userdata('email');
                            echo "<div class='user_credidential pull-right'>";
                           
                            echo "<div class='user_info'>{$user}<br/>{$email}";
                            echo "<div class='logout'><a href='".site_url('front_end/logout')."'>Sign-Out</a></div>";
                        }
                        else
                        {
                            $url=site_url('front_end/loginPage');
                            echo '<a href="url" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Login</a>';
                        }
                    ?>


					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>