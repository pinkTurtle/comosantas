<!DOCTYPE html>
<?php
/*
Template Name: Pagina Como Santas V:0.2
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

$lb_slug = 'lookbook';

global $wp_query;
$post_id = $wp_query->post->ID;
$post = get_post( $post_id );
$slug = $post->post_name;

$lookbook = get_page_by_title($lb_slug);

?>
<body class="pages">
<div class="pages <?php echo $slug; ?>">
<?php
if ($lookbook->ID == $post->post_parent) {
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


<?php if(is_page($lookbook->ID)) { ?>

  <div class="menu">

  <?php /* Pages level [1] */?>
  <?php $args_pages_1 = array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order',
    'child_of' => $lookbook->ID,
    'parent' => $lookbook->ID,
    'post_type' => 'page',
    'post_status' => 'publish'
  ); 

  $lookbook_hijas = get_pages($args_pages_1); 
  ?>

  <?php foreach($lookbook_hijas as $lh) : ?>
    <?php
      $lb_class = $lh->post_name;
      $lb_link = get_permalink( $lh->ID );
      $classes = array($lh->post_name);
    ?>

    <?php $str_class = ''; ?>
    <?php foreach (get_post_class($classes, $lh->ID) as $cl) : ?>
      <?php $str_class .= $cl . ' '; ?>
    <?php endforeach; ?>

    <div id="bloque-<?php echo $lh->ID; ?>" class="<?php echo $lb_slug.' '.$lb_class; ?>">
      <?php if (has_post_thumbnail($lh->ID)) : ?> 
        <?php $featured_image = get_the_post_thumbnail($lh->ID, 'thumbnail'); ?> 
      <?php endif; ?>

      <a href="<?php echo $lb_link; ?>">
        <span class="img">
          <?php echo get_the_post_thumbnail($lh->ID, 'medium'); ?> 
        </span>
        <span class="bg">
          <span class="title">
            <?php echo $lh->post_title; ?>
          </span>
        </span>
      </a>
    </div>
  <?php endforeach; ?>

  <div class="clear"></div>
  </div>

<?php } ?>

</div>

</body>
