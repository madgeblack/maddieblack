<div class="latest maxwidth ph5-l ph4 pb4 center">

	<div class="section-divider flex flex-wrap items-end pv4">
		<h4 class="section-title f7 ttu b">The Latest</h4>
		<span class="divider ml2"></span>
	</div>

	<div class="slider-container flex flex-wrap">

			<a class="hero-image w-50-l w-100" href="<?php the_permalink(); ?>">
				<div class="slider-image-container h-100 pt4 bg-center cover" style="<?php nice_background('hero_image'); ?>">
				</div>
			</a>
			
			<div class="slider-info w-50-l w-100 pv5 ph5 flex"style="<?php single_header_background(); ?>">
				<div class="slider-controls flex">
						<div class="dib">
							<a class="link" href="<?php the_permalink(); ?>">
								<img src="<?php bloginfo('template_directory');?>/images/arrow.svg" class="arrow">
							</a>
						</div>
				</div>


			<div class="slider-text">
				<a class="link" href="<?php the_permalink(); ?>">
					<h1 class="ogg mb2 lh-title f1-ns f2 pt5-l pt2"><?php the_title(); ?></h1>

					<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

					  // if it’s a header, go through the data
					  if( get_row_layout() == 'header' ): ?>
					<p class="f4-l f5 measure mv0">
				    <?php the_sub_field('header_intro'); ?>
					</p>

				</a>

				<?php endif; 
				endwhile; endif; ?>

			</div>
			    
				
		</div>

</div>

		
</div>
