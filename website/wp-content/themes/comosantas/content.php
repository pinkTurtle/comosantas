<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="subcontent">
          <?php the_content(); ?>
        </div><!-- .subcontent -->

	<!-- .entry-header
	<header class="entry-header">
	</header>.entry-header -->

	<footer class="entry-meta">
	</footer><!-- .entry-meta -->
</article><!-- #post -->



