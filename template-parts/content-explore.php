<div class="explore-section center ph3 ph4-l mt7">
		
	<div class="section-divider flex flex-wrap items-end mt3 pl3-l pl0">
			<h4 class="section-title f7 ttu b">Next Article</h4>
			<span class="divider ml2"></span>
		
	</div>


	<div class="flex-ns flex-wrap mt4 ph3-l ph0 center-s">
		<?php
		global $post;
		$prev_post = get_previous_post(true);
		$next_post = get_next_post(true);
		
		if ( is_object($prev_post) ):

		?>
			</div>

			<DIV class="flex flex-wrap ph3-l ph0 mb4">
				
				<div class="explore-half w-50 mt1">

				<a href="<?php echo esc_url( get_permalink( $prev_post->ID) ); ?>" class="link">

					<div class="aspect-ratio aspect-ratio--4x3 mb3">
			<!-- inner element which is fitting in the above ratio -->
			<div class="image bg-center cover aspect-ratio--object" style="<?php echo 'background-image: url(' . get_field('hero_image', $prev_post->ID ) . ')' ; ?>"></div>
		</div>		

				</a>
			

			</div>

			<div class="explore-half w-50 mt1 flex flex-column justify-between pb3 ph4-l ph3">
				<div class="mb0-l mb4">
					<a href="<?php echo esc_url( get_permalink( $prev_post->ID) ); ?>" class="link">
						<img src="<?php bloginfo('template_directory');?>/images/arrow.svg" class="explore-arrow">
					</a>
				</div>

				<div>
					<a href="<?php echo esc_url( get_permalink( $prev_post->ID) ); ?>" class="link">
						
						<p class="ogg f1-l f2 lh-title mb3"><?php echo esc_attr( $prev_post->post_title ); ?></p>

			<?php if( have_rows('content') ): while ( have_rows('content', $prev_post->ID ) ) : the_row();
			  // If it’s a header, go through the data
			  if( get_row_layout() == 'header' ): ?>

			<p class="f4-l f5"><?php the_sub_field('header_intro', $prev_post->ID ); ?></p>

			<?php endif; endwhile; endif; ?>


				</a>
				</div>


			</div>

		</DIV>

		<?php endif; ?>

	</div>


</div>