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

		<nav class="pl-0 pr-0 navbar sticky-top navbar-expand-lg navbar-light bg-light pf-nav">
			<a class="pl-3 navbar-brand mr-0" href="<?php echo get_bloginfo('url'); ?>">
		      <img class="pf-icon icon float-left" src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" class="d-inline-block align-top" alt="">
		      <div  class="brand-name">
		        <span class="name float-left">Jairo Pérez</span>
		        <span class="title float-left">Diseñador Gráfico</span>
		      </div>
		    </a>

		    <div class="navbar-toggler justify-content-end" id="pf-mobile-menu-toggler">
		    	<span class="navbar-toggler-icon"></span>
		    </div>

		    <div class="collapse navbar-collapse justify-content-end pr-2" id="navbarToggler">
		    	<?php
		    	wp_nav_menu( array( 
		    	    'theme_location' => 'my-custom-menu', 
		    	    'container_class' => 'custom-menu-class' ) ); 
		    	?>
		    </div>

		</nav>
		  
		<div class="pf-mobile-menu-wrap pf-invisible">
			<div class="col-12 pf-mobile-menu">
				<?php
				wp_nav_menu( array( 
				    'theme_location' => 'my-custom-menu', 
				    'container_class' => 'custom-menu-class' ) ); 
				?>
			</div>
		</div>



