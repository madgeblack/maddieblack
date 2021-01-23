<div class="projectnext-section maxwidth center ph3 ph4-l mb4">

			<div class="w-100 dib mt3 pb4 tr ">
			
			<?php

			if( get_adjacent_post(false, '', true) ) { 
			previous_post_link('%link', 'Another');
			} else { 
  			 $first = new WP_Query('post_type=project&posts_per_page=1&order=DESC'); $first->the_post();
    			echo '<a href="' . get_permalink() . '"Another</a>';
			}; 
    
			?>

			</div>

</div>