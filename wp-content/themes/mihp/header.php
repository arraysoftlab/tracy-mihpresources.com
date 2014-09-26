<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
  
  <!-- Google web fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'> <!-- Raleway -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'> <!-- Lato; could be changed to Open Sans -->
  
  
   <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet" type="text/css"> <!-- Default theme CSS -->
        <link href="<?php bloginfo('template_url'); ?>/assets/css/icomoon.css" rel="stylesheet" type="text/css"> <!-- Custom icons -->
        <link href="<?php bloginfo('template_url'); ?>/assets/css/animate.css" rel="stylesheet" type="text/css"> <!-- For sweet water CSS animations -->

  
  <!-- Scripts -->
        <!--script src="assets/js/jquery.min.js"></script-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/modernizr.custom.js"></script>
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  
  
  
  
</head>
<body <?php body_class('animated fadeIn'); ?> data-spy="scroll" data-offset="0" data-target="#navbar-main">

<!-- Fixed navigation starts  -->
    <div id="navbar-main">
        <div class="navbar  navbar-inverse  navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon  icon-menu"></span>
                    </button>
                    <a class="navbar-brand  smoothScroll" href="#home"><span class="logo">MIHP Resource Center</span></a> <!-- Branding -->
                </div>
                <div class="navbar-collapse  collapse">
                    <ul class="nav  navbar-nav  navbar-right">
                        <li><a href="#home" class="smoothScroll">Home</a></li>
                        <li><a href="#about" class="smoothScroll">About</a></li>
                        <li><a href="#resources" class="smoothScroll">Resources</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- navigation ends -->
    
  <!-- Header starts here -->
  <div class="imgblur"></div>
    <div class="header-wrap  center" id="home" name="home">
        <header class="clearfix">
            <p class="animated  fadeInUp">Mobile Integrated Healthcare Practice</p>
            <h1 class="animated  fadeInUp">Resource Center</h1>
        </header>	    
    </div><!-- header ends -->



