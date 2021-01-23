<div class="books-section center maxwidth">

	<div class="section-divider flex flex-wrap items-end">
			<h4 class="section-title f7 ttu b">On the shelf</h4>
			<span class="divider mh2"></span>
			<h4 class="section-title f7 ttu b"><a href="https://www.goodreads.com/user/show/12148725-maddie" class="link" target="_blank">Follow</a></h4>
		
	</div>


	<section class="books-container dib ma5-l ma4-m ma3">
		<?php
		// organise our options into a data object
		$args = array(
		  'posts_per_page' => 6,
		  'post_type' => array('bookshelf'),
		  'orderby' => 'asc',
		);
		// a variable with our query and options
		$query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
			  
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