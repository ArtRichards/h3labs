<!DOCTYPE html>
<html lang="en">
  <head>
    <title>H3 Laboratories | El Paso, Texas - Makerspace/Hackerspace</title>
    <meta name="description" content="We are a makerspace located in El Paso, Texas. We offer space and tools for members to work on anything they want, from electronics to Chemistry." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="google-site-verification" content="pedrIXa-MlK_fA110zJj51xgm4VrjXOeBiuQMYTESHQ" />
    <!-- <meta name="viewport" content="width=590"> -->
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/page-style.css">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Isotope Library -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/isotopecss.css">
    <!--Jotform -->
    <link href="https://secure.jotform.us/min/g=formCss?3.1.1592" rel="stylesheet" type="text/css" />
	<!--<link type="text/css" rel="stylesheet" href="https://secure.jotform.us/css/styles/nova.css?3.1.1592" />-->
  </head>
  <body>
  	<?php include_once("analyticstracking.php") ?>
  	<div class="container" id="header-container">
  		<div id="masthead">
  		<div id="introduction"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-retina.png" width="247px" height="52px" alt="H3 Laboratories"></div>
  		<div class="navbar hidden-phone" id="navigation-menu">
				<div class="navbar-inner" id="responsive-navbar">
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</a>
					<?php wp_nav_menu( array('menu' => 'Header Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse hidden-phone' )); ?>
				</div>
		</div>
		<!-- Phone visible HTML -->
					<div class="navbar visible-phone" id="navigation-menu-phone">
  					<div class="navbar-inner">
  						<div class="container">
  							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
  							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  								<span class="icon-bar"></span>
  							</a>
  							<!-- Be sure to leave the brand out there if you want it shown -->
  							<a class="brand" href="http://h3laboratories.com"><b><i>Main Menu</i></b></a>
  							<!-- Everything you want hidden at 940px or less, place within here -->
  							<div class="nav-collapse collapse">
  								<?php wp_nav_menu( array('menu' => 'Header Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse' )); ?>
  							</div>
  						</div>
  					</div>
  					</div>
		<!-- ------------------ -->
		</div>
		</div>