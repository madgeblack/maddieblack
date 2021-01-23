<div class="center maxwidth">
		
	<div class="section-divider first-divider flex">
		<span class="divider"></span>
	</div>


	<section class="dib w-100 pt3">

		<?php
		// organise our options into a data object
		$args = array(
		  'posts_per_page' => 1,
		  'orderby' => 'asc',
		  'post_status' => 'publish',
		);
		// a variable with our query and options
		$query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); 	
		
		echo do_shortcode('[ajax_load_more container_type="div" post_type="post" transition="none" posts_per_page="6" order="DESC" scroll="false" button_label="MORE STORIES" button_done_label="THAT\'S ALL SHE WROTE"]');
		
		endwhile; endif; ?>
		


	</section>
</div>