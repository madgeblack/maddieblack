<!-- <div class="books-section center maxwidth">

	<div class="section-divider flex flex-wrap items-end">
			<h4 class="section-title f7 ttu b">Listen Up</h4>
			<span class="divider mh2"></span>
			<h4 class="section-title f7 ttu b">See all</h4>
		
	</div>


	<div class="music w-100 pt4 pb6">
<?php
		// organise our options into a data object
		$args = array(
		  'posts_per_page' => 5,
		  'post_type' => array('playlist'),
		  'orderby' => 'rand',
		);
		// a variable with our query and options
		$music_query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($music_query->have_posts() ): while ($music_query->have_posts() ) : $music_query->the_post(); ?>

			<a href="<?php the_field('hyperlink', $post_object->ID); ?>" class="link" target="_blank">

				<div class="">
					<div class="aspect-ratio aspect-ratio--1x1" >
						<div class="image bg-center cover aspect-ratio--object" style="background-image:url('<?php the_field('cover_image'); ?>')">
						</div>
					</div>
				</div>

			</a>


		<?php endwhile; endif; ?>

	</div>

</div>


		<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?> -->