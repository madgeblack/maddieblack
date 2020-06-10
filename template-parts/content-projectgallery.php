<div class="flex flex-wrap center ph4-l">


	<?php 
	$images = get_sub_field('gallery');
	$size = 'full' ; // (thumbnail, medium, large, full or custom size)

	if( $images ) :  
	?>

	<?php foreach($images as $image) : ?>

		<!-- get an image by its id and tell it that we want the full size -->
		<!-- here we've added a custom field to our attachments (images) which adds a class name to control the width of the image -->
		<div class="gallery-image ph3 mb4-l mb3 <?php the_field('image_width', $image['id']); ?>">
			<!-- get each individual image by its id -->
			<?php echo wp_get_attachment_image($image['id'], 'full'); ?>

			<!-- here we assign our caption to a variable called $caption -->
			<?php $caption = wp_get_attachment_caption($image['id']); ?>

			<!-- if the caption is not empty, we render it onto the page -->
			<?php if(!empty($caption)) : ?>
			<p class="caption f5 o-50 pt3 mv0 untitled i">
				<!-- grab the caption by the 'attachment' or image ID -->
				<?php echo $caption; ?>
			</p>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>

</div>

<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>