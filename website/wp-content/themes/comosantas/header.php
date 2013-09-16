<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/comosantas/js/galleria-1.2.9.js"></script>
  <script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/comosantas/js/perfect-scrollbar.js"></script>
  <script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/comosantas/js/jquery.mousewheel.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38598480-3', 'comosantas.com.ar');
  ga('send', 'pageview');
</script>
	<?php wp_head(); ?>
</head>

<?php

global $wp_query;
$post_id = $wp_query->post->ID;
$post = get_post( $post_id );
$slug = $post->post_name;

?>

<body <?php body_class(); ?>>
  <?php include_once 'functions.php'; ?>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">

			<div id="navbar" class="navbar">
        <div class="logo <?php echo $slug; ?>">
          <a href="<?php echo get_bloginfo('url'); ?>"></a>
        </div>
				<nav id="site-navigation" class="navigation main-navigation <?php echo $slug; ?>" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primario', 'menu_class' => 'nav-menu' ) ); ?>

					<?php //get_search_form(); ?>

				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
