<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('&laquo;', true, 'right'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & facivons -->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/library/images/apple-touch-icon.png">
		
		<!-- stylesheets -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/style.css">
		
		<!-- scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo('template_directory'); ?>/library/js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
		
		<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/modernizr-1.6.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/imgsizer.js"></script>
		
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/ie/DOMAssistant-2.0.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/ie/selectivizr.js"></script>
		<![endif]-->
		
		<!-- wordpress head functions -->
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php wp_head(); ?>
		
		<!-- stylesheet is called after wp_head so you can overwrite plugin styles if needed -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header role="banner">
			
				<div id="inner-header">
				
					<h1 id="logo"><a href="<?php bloginfo('url'); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
					
					<nav role="navigation">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
