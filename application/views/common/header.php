<!DOCTYPE html>
<html lang="en">
<head>
<title>Realestate, Canada  </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css"/>
  <script src="<?php echo base_url(); ?>assets/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css">
<script src="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li <?php if($class == 'home'){ ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>">Home</a></li>
                <li <?php if($class == 'about'){ ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>about">About</a></li>
                <li <?php if($class == 'agents'){ ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>agents">Agents</a></li>         
                <li <?php if($class == 'contact'){ ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>images/Shark.png" alt="Realestate"></a>
				  <ul class="pull-right">
			  <?php if( !isset($_SESSION["is_logged_in"]) || $_SESSION['is_logged_in'] == false || $_SESSION['is_logged_in'] == "" ){ ?>
					<li><a href="<?php echo base_url(); ?>login">Login</a></li> 
					<?php }else{ ?>
					<li><a href="<?php echo base_url(); ?>dashboard"><?php echo $_SESSION['user_name']; ?> |</a></li> 
					<li><a href="<?php echo base_url(); ?>logout">Log out</a></li> 
				<?php } ?>
				  </ul>
</div>
<!-- #Header Starts -->
</div>