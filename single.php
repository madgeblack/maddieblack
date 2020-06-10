<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package maddieblack
 */
?> 

<div class="progress"></div>
<!-- <div class="progress" style="<?php // progressbar_color(); ?>"></div> -->

<?php
get_header();
?>


	<div id="post-page" class="content-area">
		<main id="main" class="site-main">
			
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();