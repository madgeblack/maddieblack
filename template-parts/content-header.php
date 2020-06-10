<!-- Fill header with background color custom field value -->
<div class="flex-l justify-center items-center">	  	

	<!-- Hero image -->
	<div class="w-100 w-50-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>"></div>

	<!-- Header Content -->
	<div class="flex items-center-l w-100 w-50-l ph5 vh-100-l header-right">
		<div>
		    <!-- The Title -->
		    <h1 class="title lh-title mb2 ogg pt0-l pt5">
		    <?php the_title(); ?>
			</h1>

		    <!-- The Subtitle Field -->
		    <p class="f4-l f4-m f5-s mb5 measure">
		    <?php the_sub_field('header_intro'); ?>
			</p>
		</div>
			<div class="down-arrow-container">
				<a href="#scroll" class="link">
					<img src="<?php echo get_template_directory_uri() . '/images/downarrow.svg'; ?>" class="down-arrow">
				</a>
			</div>
	</div>
	<span class="line ml5 mt5"></span>
</div>