<div class="projects-section maxwidth pb4 center pt7">

	<div class="mb2 fade-in-element">
		<h1 class="intro-header dib ogg f-subheadline-l f-subsubheadline-m f1 lh-title">
		Curious designer, <br>creative coder.</h1>


	</div>


	<div class="section-divider flex flex-wrap items-end pv4 fade hidden">
		<span class="divider"></span>
	</div>



				<?php
			// organise our options into a data object
			$args = array(
				'post_type' => array('project'),
			  'posts_per_page' => 12,
			  'orderby' => 'asc',

			);
			// a variable with our query and options
			$query = new WP_Query( $args );
			// do a loop with our new query code 
			if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>	


<div class="project-wrapper flex flex-wrap hidden">
	
	<?php

	if( get_field('new') == 'show' ): ?>
	
	<div class="new-sticker flex items-center justify-center">
	<h1 class="ogg f3">NEW</h1>
	</div>

	<?php endif; ?>

		<div class="w-60-l w-100 fade">

			<a href="<?php the_permalink(); ?>" class="link dot-cursor">

				<div class="aspect-ratio aspect-ratio--4x3">

					<!-- call up the image field -->
					<?php
					$image = get_field('hero_image');
					if( !empty($image) ): ?>

						<!-- print image data into a background url! -->
						<div class="image bg-center cover aspect-ratio--object w-100" style="background-image: url('<?php echo $image['url']; ?>')">
						</div>
				
					<?php endif; ?>
				
				</div>
			</a>
		</div>

		<div class="w-40-l w-100 pl3-l pt0-l pt3 flex flex-wrap">
				<div class="">
					<a href="<?php the_permalink(); ?>" class="link dot-cursor">
						<h4 class="f3 b mb3-l mb2 untitled lh-title"><?php the_title(); ?></h4>
					</a>

					<!-- call up the author name field -->
					<?php
					$post_object = get_field('short_description');
					if( $post_object ): ?>	

					<p class="f3 pr6-l"><?php the_field('short_description', $post_object->ID); ?>
					</p>
				</div>

					<a href="<?php the_permalink(); ?>" class="read-more dot-cursor link w-100">
						<p class="readmore f3 pt3">Read More <span class="plus">+</span></p>
					</a>
		</div>

	</div>

	<div class="section-divider flex flex-wrap items-end pv4 hidden">
		<h4 class="section-title"></h4>
		<span class="divider"></span>
	</div>

	<?php endif; endwhile; endif ?>		
</div>

<script>
(function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('fade-in-element');
        element.classList.remove('hidden');
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();
</script>


<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>