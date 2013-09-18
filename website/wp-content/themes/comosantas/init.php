<!DOCTYPE html>

<?php
/*
Template Name: Pagina inicial
*/
?>

<head>
  <link href='http://fonts.googleapis.com/css?family=Cabin:700,400,500|Waiting+for+the+Sunrise|Lily+Script+One' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/comosantas/js/galleria-1.2.9.js"></script>
<style>
    #galleria { 
      height: 320px;
      background: #fff;
      margin: 100px auto 20px;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      width: auto;
    }
    #galleria .galleria-bar{
      display: none;
    } 
    #galleria .galleria-progress{
      display: none;
    } 
</style>
</head>
<body class="init pages">

  <div class="init pages">
  <?php wp_nav_menu( array( 'theme_location' => 'primario', 'menu_class' => 'nav-menu' ) ); ?>
    <div class="init logo">
    <a href="<?php echo get_bloginfo('url'); ?>"></a>
    </div>

		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

    <div class="site_logo">
    </div>
    <ul class="contact_menu">
      <li class="fb">
        <a href="https://www.facebook.com/pages/Como-Santas/459426347444590"
          target="_blank">facebook
        </a>
      </li>
      <li class="ma">
        <a href="mailto:comosantas@gmail.com">mail
        </a>
      </li>
      <li class="te">
        <a href="contacto">phone
        </a>
      </li>
    </ul>
  </div>

</body>
