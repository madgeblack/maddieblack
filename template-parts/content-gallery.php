<div class="container flex flex-wrap center ph4-l pb4-l">
	<?php $images = get_sub_field('gallery'); ?>
	<?php foreach($images as $image) : ?>

		<!-- Assign a class for each image width -->
		<div class="gallery-image mb4-l mb3 ph3 <?php the_field('image_width', $image['id']); ?>">
			<!-- Show each image by its ID -->
			<?php echo wp_get_attachment_image($image['id'], 'full'); ?>

			<!-- Assign caption a variable called $caption -->
			<?php $caption = wp_get_attachment_caption($image['id']); ?>

			<!-- If the caption is not empty -->
			<?php if(!empty($caption)) : ?>
			<p class="caption f5 o-50 pt3 mv0 untitled i">
				<!-- Then show caption -->
				<?php echo $caption; ?>
			</p>

			<?php endif; ?>
		</div>

	<?php endforeach; ?>
</div>