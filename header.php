<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

    <!-- Custom CSS -->
    <link href= "<?php echo get_template_directory_uri(); ?>/css/portfolio-main.css" rel="stylesheet">

</head>

<body>

	<div class="ruler"></div>

	<div class="container pl-xl-4 pr-xl-4">

	  <nav class="fade-scroll pl-3 pr-2 sticky-top navbar navbar-expand-lg navbar-light bg-light">
	    <a class="navbar-brand mr-0" href="<?php echo get_bloginfo('url'); ?>">
	      <img class="pf-icon icon float-left" src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" class="d-inline-block align-top" alt="">
	      <div  class="brand-name">
	        <span class="name float-left">Jairo Pérez</span>
	        <span class="title float-left">Diseñador Gráfico</span>
	      </div>
	    </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
	    	<ul class="navbar-nav">
	    	  <li class="nav-item">
	    	    <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php">Inicio</a>
	    	  </li>
	    	  <li class="nav-item">
	    	    <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php?cat=2">Web</a>
	    	  </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php?cat=3">UI/UX</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php?cat=5">Diseño Gráfico</a>
	        </li>
	    	  <li class="nav-item">
	    	    <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php?cat=4">Fotografía</a>
	    	  </li>
	    	  <li class="nav-item">
	    	    <a class="nav-link" href="<?php echo get_bloginfo('url'); ?>/index.php?cat=6">Handmade</a>
	    	  </li>
	    	</ul>

	    </div>
	  </nav>
