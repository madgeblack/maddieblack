<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddieblack
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<?php
	$args = array(
		'post_type' => 'project',
	);
	while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content-projectpost', get_post_type('project') );
	
		endwhile; // End of the loop.
		?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();