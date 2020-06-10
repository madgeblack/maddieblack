<!-- this is our intro text block -->
<div class="intro-container flex-l justify-center center ph0-l ph5">
	<div class="metadata flex-wrap-l mt5 mt6-l dib text-block">
		<div class="b ttu tracked f6">
			<?php the_sub_field('date'); ?>
		</div>
		<div class="f6 ttl pt2 i">
			<?php 
			$categories = get_the_category();
			foreach($categories as $category) {
   			echo '<a class= "link db-l pr2" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
			}
 			?>
		</div>
		 <div class="flex mt3">
		    
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
		 </div>
	</div>

	<div class="intro-text pt6-l pt5 pb4 pb5-l flex-wrap-l text-block">
		<?php the_sub_field('intro_text_content'); ?>
	</div>

	<div class="addthis_sharing_toolbox" data-url="<?php the_permalink(); ?>" data-title="<?php the_sub_field('header_intro'); ?>"></div>

</div>