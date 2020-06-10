<div class="center maxwidth ph5-l ph4">
		
	<div class="section-divider first-divider flex">
		<span class="divider"></span>
	</div>


	<section class="allposts dib w-100 pt3">




		<?php
		// organise our options into a data object
		$args = array(
		  'posts_per_page' => 9,
		  'orderby' => 'asc',
		);
		// a variable with our query and options
		$query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

			  
		<!-- code as we’re used to already! -->
			<!-- giving the outer div an aspect ratio -->
			<article class="dib">
				<a href="<?php the_permalink(); ?>" class="ph2 ph0-ns link">
						<div class="aspect-ratio aspect-ratio--4x3 mb3">
							<!-- inner element which is fitting in the above ratio -->
							<div class="image bg-center cover aspect-ratio--object" style="<?php nice_background('hero_image');?>"></div>
						</div>	

						<!-- if we have some flexible content, let’s loop through it -->
					<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

				  // if it’s a header, go through the data
				  if( get_row_layout() == 'header' ): ?>
				<h4 class="f3 f2-m f2-l lh-title mv2 ogg"><?php the_title(); ?>
				</h4>

				<p class="f5-l f6 mb5-l mb2"><?php the_sub_field('header_intro'); ?>
				</p>

				</a>

				<?php endif; 
				endwhile; endif; ?>


		 	</article>
		


		<?php endwhile; endif; ?>


	</section>


		<!-- <div class="button tc pa2 mv5 f6"> -->
			<!-- MORE MORE MORE! -->
		<!-- </div> -->

</div>