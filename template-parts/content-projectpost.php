<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddieblack
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="entry-content">

		<!-- if we have some flexible content, let’s loop through it -->
	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

				  // if it’s a header, go through the data
	  if( get_row_layout() == 'intro_info' ): ?>

		<!-- here we put in our gallery component -->
		<?php get_template_part( 'template-parts/content-projectintro' ); ?>

		<?php elseif( get_row_layout() == 'gallery' ): ?>

		<!-- here we put in our gallery component -->
		<?php get_template_part( 'template-parts/content-projectgallery' ); ?>

		<?php endif; 
		endwhile; endif; ?>

		<!-- here we include our explore component -->
		<?php get_template_part( 'template-parts/content-projectnext' ); ?>


</div><!-- .entry-content -->
</article>

	<footer class="entry-footer">



	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
