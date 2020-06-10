<div class="categories-section center maxwidth ph5-l ph4">
		
	<div class="section-divider flex">
		<span class="divider"></span>
	</div>

		<div class="flex flex-wrap justify-between-ns w-100 ttu pv4 f4-l f6">
			<?php 
			$categories = get_categories( 'order=DESC&exclude=1,20' );
			foreach($categories as $category) {
   			echo '<a class= "link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
			}
 			?>
		</div>

</div>