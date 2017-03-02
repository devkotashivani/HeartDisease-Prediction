<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>css/local.css" />

    <script type="text/javascript" src="<?=base_url();?>js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>bootstrap/js/bootstrap.min.js"></script>

      <style>

        div {
            padding-bottom:20px;
        }

    </style>
</head>


<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= site_url('dashboard')?>">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="<?=base_url();?>index.php/dashboard"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="<?=base_url();?>index.php/dashboard/home"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?=base_url();?>index.php/dashboard/healthlife"><i class="fa fa-plus-square"></i> Health Life</a></li>
<!--                    <li><a href="--><?//=base_url();?><!--index.php/dashboard/signup"><i class="fa fa-list-ol"></i> SignUp</a></li>-->
                    <li><a href="<?=base_url();?>index.php/dashboard/predictionsystem"><i class="fa fa-area-chart"></i> Prediction System</a></li>
                    <li><a href="<?=base_url();?>index.php/dashboard/aboutus"><i class="fa fa-th-large"></i> About Us</a></li>
                    <li><a href="<?=base_url();?>index.php/dashboard/contactus"><i class="fa fa-phone-square"></i> Contact Us</a></li>
                    
                         
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
               
                                 
                    <li class="dropdown user-dropdown">                    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b>


                        </a>

                        <ul class="dropdown-menu">  

                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('dashboard/adlogout')?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li >
                    <br/>
                         <?php
                        if($this->session->userdata('username')) {
                            $user=$this->session->userdata('username');                          
                            
                           
                            echo "<div class='user_info'>{$user}";
                           
                        }
                        else
                        {
                            $url=site_url('dashboard/adlogin');
                            echo '<a href="url" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Login</a>';
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </nav>

         <hr />