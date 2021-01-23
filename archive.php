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
				<h2 class="untitled f4 ttu pt7">ALL STORIES</h2>

					<div class="section-divider flex">
					<span class="divider"></span>
					</div>

			</header><!-- .page-header -->


	<section class="allposts dib w-100 pt3">

	<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type( 'post' ) );

			endwhile; the_posts_navigation();

		else : get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

			<article class="dib">
				<a href="<?php the_permalink(); ?>" class="ph2 ph0-ns link">
						<div class="aspect-ratio aspect-ratio--4x3 mb3">
							<!-- inner element which is fitting in the above ratio -->
							<div class="bg-center cover aspect-ratio--object" style="<?php nice_background('hero_image');?>"></div>
						</div>			

						<!-- if we have some flexible content, let’s loop through it -->
					<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

				  // if it’s a header, go through the data
				  if( get_row_layout() == 'header' ): ?>
				<h4 class="f3 f2-m f2-l lh-title mv2 ogg"><?php the_title(); ?>


				</h4>

				<p class="f5-l f6 mb4-l mb2"><?php the_sub_field('header_intro'); ?>
				</p>
				</a>

				<?php endif; 
				endwhile; endif; ?>
				


		 	</article>

			<?php
			endwhile;
			?>

		</section>
		<div>
			<?php if (function_exists('pagination')) {
		          pagination($cat_query->max_num_pages);
		      } ?>
		</div>

    	<?php wp_reset_query(); ?>

<?php
// get_sidebar();
get_footer();
?>
			

	</div>

		</main><!-- #main -->
	</div><!-- #primary -->
