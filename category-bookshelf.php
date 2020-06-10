<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddieblack
 */

get_header();
?>

	<div id="primary" class=" maxwidth ph5-l ph4 center content-area">
		<main id="main" class="site">


			<header class="page-header">
				<h2 class="untitled f4 ttu pt7">Category: <?php single_cat_title(); ?></h2>
					<div class="section-divider flex">
					<span class="divider"></span>
					</div>

			</header><!-- .page-header -->

<section class="books-container dib ma5-l ma4-m ma3">
		<?php
		// organise our options into a data object
		$args = array(
		  'posts_per_page' => 9,
		  'post_type' => array('bookshelf'),
		  'orderby' => 'asc',
		  'paged' => $paged,
		);
		// a variable with our query and options
		$books_query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($books_query->have_posts()): while ($books_query->have_posts()): $books_query->the_post(); ?>
			  
		<!-- code as we’re used to already! -->
			<!-- giving the outer div an aspect ratio -->
			<article class="tc">

					<!-- call up the hyperlink field -->
					<?php

					$post_object = get_field('hyperlink');

					if( $post_object ): ?>	

			<a href="<?php the_field('hyperlink', $post_object->ID); ?>" class="link" target="_blank">

				<div class="book">
					<img src="<?php bloginfo('template_directory');?>/images/book.svg" class="book-icon">
					<p class="book-quote dib f4 lh-title"><?php the_field('quote', $post_object->ID); ?></p>
				</div>
					<!-- show the title -->
					<h4 class="f3 f2-l mv3-l mv2 ogg lh-title"><?php the_title(); ?></h4>

					<!-- call up the author name field -->
					<?php

					$post_object = get_field('author_name');

					if( $post_object ): ?>		
					
					<!-- show the author name field -->
					<h4 class="f6 ttu">
					<?php the_field('author_name', $post_object->ID); ?>
					</h4>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

				</a>
					
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>
		 	</article>
		<?php endwhile; endif; ?>

	</section>

</div>



<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php
// get_sidebar();
get_footer();
?>		
		</main><!-- #main -->
	</div><!-- #primary -->
