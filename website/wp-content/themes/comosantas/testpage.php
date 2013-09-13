<!DOCTYPE html>
<?php
/*
Template Name: Pagina en desarrollo
*/
get_header();
?>
<style>
    #galleria { 
      width: 595px;
      height: 385px;
      background: #fff;
      margin: 20px auto;
      border-top: 30px solid white;
      border-left: 30px solid white;
      border-right: 30px solid white;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
    }
    #galleria .galleria-progress{
      display: none;
    } 
</style>

<script>
jQuery(document).ready(function ($) {
"use strict";
$('#Default').perfectScrollbar();
$('#FastWheelSpeed').perfectScrollbar({wheelSpeed:100});
$('#SlowWheelSpeed').perfectScrollbar({wheelSpeed:1});

$(".quienessomos").perfectScrollbar({
  wheelSpeed: 20,
  wheelPropagation: true,
  minScrollbarLength: 20
})


});
</script>

<?php

global $wp_query;
$post_id = $wp_query->post->ID;
$post = get_post( $post_id );
$slug = $post->post_name;

?>
<body class="pages">
<div class="pages <?php echo $slug; ?>">
  <div class="logo <?php echo $slug; ?>">
    <a href="<?php echo get_bloginfo('url'); ?>"></a>
  </div>
<?php
if (13 == $post->post_parent) {
?>
  <div class="lookbook_logo">
  <a href="<?php echo get_bloginfo('url'); ?>/lookbook/">
  </a>
  </div>
<?php
}
    //echo $post->post_content;
  ?> 

		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

</div>

</body>
