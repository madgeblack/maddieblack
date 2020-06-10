<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddieblack
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- get intro section -->
			<?php get_template_part( 'template-parts/content-intro' ); ?>

			<!-- get hero slider section -->
			<?php 
			$args = array(
					'posts_per_page' => 1,
					'orderby' => rand,
					'tag' => 'featured'
				);
			$query = new WP_Query($args);
			if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
			  // get the id for our current post and store it in a variable
			  $hero_post = get_the_ID();
			  get_template_part('template-parts/content-hero');
			endwhile; endif;
			?>

			<!-- get categories section -->
			<?php get_template_part( 'template-parts/content-categories' ); ?>

			<!-- get all posts section -->
			<?php get_template_part( 'template-parts/content-allposts' ); ?>

			<!-- get maps section -->
			<?php get_template_part( 'template-parts/content-maps' ); ?>

			<!-- get books section -->
			<?php get_template_part( 'template-parts/content-books' ); ?>

			<!-- get music section -->
			<?php get_template_part( 'template-parts/content-music' ); ?>

			<!-- get form section -->
			<?php get_template_part( 'template-parts/content-form' ); ?>

			<!-- get footer section -->
			<?php get_template_part( 'template-parts/content-footer' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
