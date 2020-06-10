<div class="maps-section center maxwidth ph5-l ph4 pt5">

	<div class="section-divider flex flex-wrap items-end">
		<h4 class="section-title f7 ttu b">Map it out</h4>
		<span class="divider mh2"></span>
	</div>

</div>

	<div class="marquee mb4">
		<div class="marquee-inner maps mv3-l mv4">

			<span class="marquee-items tc">
			<?php
			// organise our options into a data object
			$args = array(
			  'posts_per_page' => 9,
			  'post_type' => array('map'),
			  'orderby' => 'asc',
			);
			// a variable with our query and options
			$maps_query = new WP_Query( $args );
			// do a loop with our new query code 
			if ($maps_query->have_posts() ): while ($maps_query->have_posts() ) : $maps_query->the_post(); ?>

					<!-- call up the hyperlink field -->
						<?php

						$post_object = get_field('hyperlink');

						if( $post_object ): ?>	


							<a href="<?php the_field('hyperlink', $post_object->ID); ?>" class="map-link link dib" target="_blank">
								<p class="dib untitled f-subheadline-l f1 ttu tc pr4"><?php the_title(); ?> &</p>
							</a>


						<?php endif; ?>

			<?php endwhile; endif; ?>

			</span>

			<span class="marquee-items tc">
			<?php
			// organise our options into a data object
			$args = array(
			  'posts_per_page' => 9,
			  'post_type' => array('map'),
			  'orderby' => 'asc',
			);
			// a variable with our query and options
			$maps_query = new WP_Query( $args );
			// do a loop with our new query code 
			if ($maps_query->have_posts() ): while ($maps_query->have_posts() ) : $maps_query->the_post(); ?>

					<!-- call up the hyperlink field -->
						<?php

						$post_object = get_field('hyperlink');

						if( $post_object ): ?>	


							<a href="<?php the_field('hyperlink', $post_object->ID); ?>" class="map-link link dib" target="_blank">
								<p class="dib untitled f-subheadline-l f1 ttu tc pr4"><?php the_title(); ?></p>
							</a>


						<?php endif; ?>

			<?php endwhile; endif; ?>

			</span>

		</div>
	</div>

		<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>