<div class="project-gallery maxwidth flex flex-wrap center">


	<?php 
	$images = get_sub_field('gallery');

	if( $images ) :  
	?>

	<?php foreach($images as $image) : ?>


		<div class="gallery-image mb4-l mb3 <?php the_field('image_width', $image['id']); ?>">
			<!-- get each individual image by its id -->
			<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

		</div>
	<?php endforeach; ?>
	<?php endif; ?>

</div>

<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


